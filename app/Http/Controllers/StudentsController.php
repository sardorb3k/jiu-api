<?php

namespace App\Http\Controllers;

use App\Models\ContactInformation;
use App\Models\PassportInformation;
use App\Models\EnrollmentStatus;
use App\Models\RoleToUser;
use App\Models\User;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class StudentsController extends Controller
{
    public function index()
    {
        $arr = RoleToUser::where('role_id', '01gt108afrfakxnnme47k81d2p')->pluck('user_id')->toArray();
        $data = User::whereIn('id', $arr)->get();
        return view('students.index', compact('data'));
    }
    public function show($id)
    {
        try {
            $data = User::where('id', $id)->first() ?? [];
            $passport = PassportInformation::where('user_id', $id)->first() ?? [];
            $upload = Upload::where('user_id',$id)->first() ?? [];
            $contact = DB::table('user_contactinformation as u')
            ->leftJoin('districts as d', 'u.state_id', '=', 'd.id')
            ->leftJoin('villages as v', 'u.district_id', '=', 'v.id')
            ->leftJoin('regions as r', 'u.region_id', '=', 'r.id')
            ->select('d.name_uz as district', 'r.name_uz as region', 'v.name_uz as village', 'u.*')
            ->where('u.user_id', '=', $id)
            ->first() ?? [];
            $enrollment = DB::table('enrollments as e')
            ->leftJoin('departments as d', 'e.department_id', '=', 'd.id')
            ->select('d.name', 'e.*')
            ->where('e.user_id', '=', $id)
            ->first() ?? [];
            return view('students.show', compact('data','passport','contact', 'upload', 'enrollment'));
        } catch (\Throwable $th) {
            return redirect()->route('students.show',$id)->with('error', $th);
        }
    }

    public function action_status(Request $request)
    {
        $id = Auth::user()->id;
        try {
            EnrollmentStatus::create([
                'user_id' => $id,
                'status' => $request->action,
                'description' => $request->description,
            ]);
            return redirect()->route('students.show',$id)->with('success', 'Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('students.show',$id)->with('error', $th);
        }

    }
}

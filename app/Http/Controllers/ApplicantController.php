<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Enrollments;
use App\Models\User;
use App\Models\PassportInformation;
use Illuminate\Http\Request;
use App\Models\EnrollmentStatus;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Details
    public function Details()
    {
        $data = Department::get();
        $id = Auth::user()->id;
        $enrollment = Enrollments::where('user_id',$id)->first();
        $user = User::findOrFail($id);
        $passportinfo = PassportInformation::where('user_id', $id)->first();
        $enrollmentstatus = EnrollmentStatus::where('user_id',$id)->first();
        return view('applicant.details', compact('data','enrollment','enrollmentstatus','user', 'passportinfo'));
    }
    public function Details_save(Request $request)
    {
        $id = Auth::user()->id;
        try {
            Enrollments::create([
                'user_id' => $id,
                'department_id' => $request->deportment,
            ]);
            return redirect()->route('applicant.details')->with('success', 'Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('applicant.details')->with('error', $th);
        }
    }
    // uploadeddocuments
    public function uploadeddocuments()
    {
        return view('applicant.uploadeddocuments');
    }
    // examinations
    public function examinations()
    {
        return view('applicant.examinations');
    }
    // approvetoexam
    public function approvetoexam()
    {
        return view('applicant.approvetoexam');
    }
}

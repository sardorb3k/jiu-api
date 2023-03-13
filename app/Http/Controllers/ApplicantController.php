<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\EnrollmentExamday;
use App\Models\Enrollments;
use App\Models\User;
use App\Models\PassportInformation;
use Illuminate\Http\Request;
use App\Models\EnrollmentStatus;
use App\Models\Examdays;
use App\Models\Qualification;
use App\Models\Upload;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        $qualification = Qualification::get();
        $id = Auth::user()->id;
        $enrollment = Enrollments::where('user_id', $id)->first();
        $user = User::findOrFail($id);
        $passportinfo = PassportInformation::where('user_id', $id)->first();
        $enrollmentstatus = EnrollmentStatus::where('user_id', $id)->orderBy('created_at', 'DESC')->first();
        return view('applicant.details', compact('data', 'enrollment', 'enrollmentstatus', 'user', 'passportinfo', 'qualification'));
    }
    public function Details_save(Request $request)
    {
        // dd($request);
        #v qualification_file
        $id = Auth::user()->id;
        try {

            if ($request->hasFile('qualification_file')) {
                $image = $request->file('file');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/qualification');
                $image->move($destinationPath, $name);
                $upload = Upload::create([
                    'user_id' => $id,
                    'type' => 'qualification',
                    'filename' => $name,
                ]);
            }
            Enrollments::create([
                'user_id' => $id,
                'department_id' => $request->deportment,
                'qualification' => $request->qualification ? true : false,
            ]);
            return redirect()->route('applicant.examinations')->with('success', 'Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('applicant.details')->with('error', $th);
        }
    }
    // uploadeddocuments
    public function checkstatus()
    {
        $id = Auth::user()->id;
        $examday = EnrollmentExamday::where('user_id', $id)->orderBy('created_at', 'DESC')->first();
        $enrollment = Enrollments::where('user_id', $id)->orderBy('created_at', 'DESC')->first();
        if(!$examday) {
            return redirect()->route('applicant.examinations');
        }
        if(!$enrollment) {
            return redirect()->route('applicant.details');
        }
        $user = User::findOrFail($id);
        $enrollment = Enrollments::where('user_id', $id)->first();
        $enrollmentstatus = EnrollmentStatus::where('user_id', $id)->orderBy('created_at', 'DESC')->first();
        $passportinfo = PassportInformation::where('user_id', $id)->first();
        return view('applicant.checkstatus', compact('enrollment', 'enrollmentstatus', 'user', 'passportinfo'));
    }
    // examinations
    public function examinations()
    {
        $id = Auth::user()->id;
        $enrollment = Enrollments::where('user_id', $id)->orderBy('created_at', 'DESC')->first();
        if(!$enrollment) {
            return redirect()->route('applicant.details');
        }
        $data = Examdays::get();
        $enrollmentexamday = EnrollmentExamday::where('user_id', $id)->first();
        return view('applicant.examinations', compact('data', 'enrollmentexamday'));
    }
    public function exam_save(Request $request)
    {
        $id = Auth::user()->id;
        try {
            EnrollmentExamday::create([
                'user_id' => $id,
                'day_id' => $request->deportment,
                'qualification' => $request->qualification ? true : false,
            ]);
            return redirect()->route('applicant.checkstatus')->with('success', 'Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('applicant.examinations')->with('error', $th);
        }
    }
    // approvetoexam
    public function approvetoexam()
    {
        return view('applicant.approvetoexam');
    }

    public function apply_update(Request $request)
    {
        // dd($request);
        $validateUser = Validator::make(
            $request->all(),
            [
                'firstname' => 'required',
                'lastname' => 'required',
                'middlename' => 'required',
                'gender' => 'required',
                'datebirth' => 'required',
                'phoneNumber' => 'required',
                'passport' => 'required',
                'enrollment_id' => 'required',
            ]
        );
        $id = Auth::user()->id;
        // Get user by id
        $user = User::findOrFail($id);
        $enrollment = EnrollmentStatus::where('id', $request->enrollment_id)->orderBy('created_at', 'DESC')->first();

        if ($validateUser->fails()) {
            return redirect()->route('applicant.checkstatus')->with('error', $validateUser->errors());
        }


        // image upload to public/images folder and store image name to database students table
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/passport');
            $image->move($destinationPath, $name);
            $upload = Upload::create([
                'user_id' => $id,
                'type' => 'passport',
                'filename' => $name,
            ]);
        }


        $passportinformation = PassportInformation::where('user_id', $id)->update([
            'passport' => $request->passport,
        ]);

        $user->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'middlename' => $request->middlename,
            'gender' => $request->gender,
            'birthdate' => $request->datebirth,
            'phone' => str_replace(["(", ")", "-", " ", "+"], "", $request->phoneNumber),
        ]);

        $enrollment->update([
            'status' => '1',
        ]);

        return redirect()->route('applicant.checkstatus')->with('success', 'Successfully');
    }
}

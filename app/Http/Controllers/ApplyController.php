<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\ContactInformation;
use App\Models\Countries;
use App\Models\PassportInformation;
use App\Models\States;
use App\Models\Cities;
use App\Models\Districts;
use App\Models\Permission;
use App\Models\Regions;
use App\Models\Role;
use App\Models\RoleHasPermission;
use App\Models\Upload;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Villages;

class ApplyController extends Controller
{
    // permissions
    public function permissions(Request $request)
    {
        $passportinformation = RoleHasPermission::create([
            'role_id' => $request->name,
            'permission_id' => $request->key,
        ]);
        return redirect()->route('permission.create')->with('success', 'permissions Created Successfully');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function apply_update_view()
    {
        $id = Auth::user()->id;

        $user = User::findOrFail($id);
        $contactinfo = ContactInformation::where('user_id', $id)->first();
        $passportinfo = PassportInformation::where('user_id', $id)->first();
        return view('apply.update', compact('user', 'contactinfo', 'passportinfo'));
    }
    // logout
    public function logout(Request $request)
    {
    }

    // apply_document_view
    public function apply_document_view(Request $request)
    {
        return view('apply.document', compact('user', 'contactinfo', 'passportinfo'));
    }

    public function apply_update(Request $request)
    {
        $validateUser = Validator::make(
            $request->all(),
            [
                'firstname' => 'required',
                'lastname' => 'required',
                'middlename' => 'required',
                'gender' => 'required',
                'datebirth' => 'required',
                'phoneNumber' => 'required',
                'passportnumber' => 'required',
                'passportseries' => 'required',
                'pinfl' => 'required',
                'placeissue' => 'required',
                'givenby' => 'required',
                'dateissue' => 'required',
                'dateexpiration' => 'required',
            ]
        );
        $id = Auth::user()->id;
        // Get user by id
        $user = User::findOrFail($id);

        if ($validateUser->fails()) {
            return redirect()->route('apply.personal-view')->with('error', $validateUser->errors());
        }

        $passportinformation = PassportInformation::create([
            'user_id' => $id,
            'passportnumber' => $request->passportnumber,
            'passportseries' => $request->passportseries,
            'pinfl' => $request->pinfl,
            'placeissue' => $request->placeissue,
            'givenby' => $request->givenby,
            'dateissue' => $request->dateissue,
            'dateexpiration' => $request->dateexpiration,
        ]);

        $user->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'middlename' => $request->middlename,
            'gender' => $request->gender,
            'birthdate' => $request->datebirth,
            'phone' => str_replace(["(", ")", "-", " ", "+"], "", $request->phoneNumber),
        ]);
        return redirect()->route('apply')->with('success', 'Personal Information Created Successfully');
    }

    public function apply_view()
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $contactinfo = ContactInformation::where('user_id', $id)->exists();
        $passportinfo = PassportInformation::where('user_id', $id)->exists();
        $data = "/";
        if (!$user->firstname) {
            $data = "/apply/personal";
        } elseif (!$passportinfo) {
            $data = "/apply/passport";
        } elseif (!$contactinfo) {
            $data = "/apply/contact";
        }
        if ($passportinfo && $user->firstname) {
            return view('apply.index', compact('data'));
        } else {
            return view('apply.index', compact('data'));
        }
    }
    /**
     * Personal Information
     * @param Request $request
     * @return PersonalInformation
     */
    public function personal_information(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'firstname' => 'required',
                    'lastname' => 'required',
                    'middlename' => 'required',
                    'gender' => 'required',
                    'datebirth' => 'required',
                    'phoneNumber' => 'required',
                ]
            );
            $id = Auth::user()->id;
            // Get user by id
            $user = User::findOrFail($id);

            if ($validateUser->fails()) {
                return redirect()->route('apply.personal_information')->with('error', $validateUser->errors());
            }

            $user->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'middlename' => $request->middlename,
                'gender' => $request->gender,
                'birthdate' => $request->datebirth,
                'phone' => str_replace(["(", ")", "-", " ", "+"], "", $request->phoneNumber),
            ]);
            return redirect()->route('apply')->with('success', 'Personal Information Created Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('apply.personal_information')->with('error', $th->getMessage());
        }
    }


    public function personal_view()
    {
        return view('apply.personal');
    }


    /**
     * Passport Information
     * @param Request $request
     * @return PassportInformation
     */
    public function passport_information(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'passportnumber' => 'required',
                    'passportseries' => 'required',
                    'pinfl' => 'required',
                    'placeissue' => 'required',
                    'givenby' => 'required',
                    'dateissue' => 'required',
                    'dateexpiration' => 'required',
                    'file' => 'required',
                ]
            );

            if ($validateUser->fails()) {
                return redirect()->route('apply.passport-view')->with('error', $validateUser->errors());
            }
            $id = Auth::user()->id;

            // image upload to public/images folder and store image name to database students table
            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/passport');
                $image->move($destinationPath, $name);
            }

            $passportinformation = PassportInformation::create([
                'user_id' => $id,
                'passportnumber' => $request->passportnumber,
                'passportseries' => $request->passportseries,
                'pinfl' => $request->pinfl,
                'placeissue' => $request->placeissue,
                'givenby' => $request->givenby,
                'dateissue' => $request->dateissue,
                'dateexpiration' => $request->dateexpiration,
                'status' => 'passport',
            ]);

            return redirect()->route('apply')->with('success', 'Passport Information Created Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('apply.passport_information')->with('error', $th->getMessage());
        }
    }
    public function passportcertificate(Request $request)
    {
        try {
            // dd($request);
            $validateUser = Validator::make(
                $request->all(),
                [
                    'passportnumber' => 'required',
                    'passportseries' => 'required',
                    'file' => 'required',
                ]
            );

            if ($validateUser->fails()) {
                return redirect()->route('apply.passport-view')->with('error', $validateUser->errors());
            }
            $id = Auth::user()->id;

            // image upload to public/images folder and store image name to database students table
            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/certificate');
                $image->move($destinationPath, $name);
            }

            $upload = Upload::create([
                'user_id' => $id,
                'type' => 'certificate',
                'filename' => $name,
            ]);

            $passportinformation = PassportInformation::create([
                'user_id' => $id,
                'passportnumber' => $request->passportnumber,
                'passportseries' => $request->passportseries,
                'status' => 'certificate',
            ]);

            return redirect()->route('apply')->with('success', 'Certificate Information Created Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('apply.passport_information')->with('error', $th->getMessage());
        }
    }

    public function passport_view()
    {
        return view('apply.passport');
    }

    /**
     * Contact Information
     * @param Request $request
     * @return ContactInformation
     */
    public function contact_information(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'region' => 'required',
                    'state' => 'required',
                    'district' => 'required',
                ]
            );

            if ($validateUser->fails()) {
                return redirect()->route('apply.contact')->with('error', $validateUser->errors());
            }
            $id = Auth::user()->id;

            $contactinformation = ContactInformation::create([
                'user_id' => $id,
                'country_id' => '1',
                'region_id' => $request->region,
                'state_id' => $request->state,
                'district_id' => $request->district,
            ]);

            return redirect()->route('apply')->with('success', 'Passport Information Created Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('apply.contact')->with('error', $th->getMessage());
        }
    }

    public function contact_view()
    {
        $region = Regions::get();
        return view('apply.contact', compact('region'));
    }

    // County State City
    public function location_data(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'data' => 'required',
                    'id' => 'nullable',
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            if ($request->data == "country") {
                $data = Countries::get();
            }
            if ($request->data == "state") {
                $data = States::where('country_id', $request->id)->get();
            }
            if ($request->data == "state") {
                $data = Cities::where('state_id', $request->id)->get();
            }

            return response()->json([
                'status' => true,
                'message' => 'Contact Information Created Successfully',
                'data' => $data,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function getRegion($id)
    {
        $data = Districts::where('region_id', $id)->get();

        return response()->json([
            'status' => true,
            'data' => $data,
        ], 200);
    }


    public function getDistricts($id)
    {
        $data = Villages::where('district_id', $id)->get();

        return response()->json([
            'status' => true,
            'data' => $data,
        ], 200);
    }

    public function getVillages($id)
    {
        $data = Villages::where('district_id', $id)->get();

        return response()->json([
            'status' => true,
            'data' => $data,
        ], 200);
    }

    // Apply check
    public function apply_check(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $contactinfo = ContactInformation::where('user_id', $id)->exists();
        $passportinfo = PassportInformation::where('user_id', $id)->exists();
        $data = "";
        if (!$user->firstname) {
            $data = "personalinformation";
        } elseif (!$passportinfo) {
            $data = "passportinformation";
        }
        // elseif (!$contactinfo) {
        //     $data = "contactinformation";
        // }
        if ($passportinfo && $user->firstname) {
            return response()->json(['success' => true], 200);
        } else {
            return response()->json(['success' => false, 'data' => $data], 200);
        }
    }
}

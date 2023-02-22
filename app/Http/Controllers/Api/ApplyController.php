<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\ContactInformation;
use App\Models\Countries;
use App\Models\PassportInformation;
use App\Models\States;
use App\Models\Cities;
use Illuminate\Http\Request;
use App\Models\User;

class ApplyController extends Controller
{

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
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $user->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'middlename' => $request->middlename,
                'gender' => $request->gender,
                'birthdate' => $request->datebirth,
                'phone' => str_replace(["(", ")", "-", " ", "+"], "", $request->phoneNumber),
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Personal Information Created Successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
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
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }
            $id = Auth::user()->id;

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

            return response()->json([
                'status' => true,
                'message' => 'Passport Information Created Successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
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
                    'country' => 'required',
                    'region' => 'required',
                    'district' => 'required',
                    'address' => 'required',
                    'zipcode' => 'required',
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }
            $id = Auth::user()->id;

            $contactinformation = ContactInformation::create([
                'user_id' => $id,
                'country' => $request->country,
                'region' => $request->region,
                'district' => $request->district,
                'address' => $request->address,
                'zipcode' => $request->zipcode,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Contact Information Created Successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
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

<?php

namespace App\Http\Controllers;

use App\Models\ContactInformation;
use App\Models\PassportInformation;
use App\Models\RoleToUser;
use App\Models\User;
use Illuminate\Http\Request;

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
        $data = User::where('id', $id)->first();
        $passport = PassportInformation::where('user_id', $id)->first();
        $contact = ContactInformation::where('user_id', $id)->first();
        return view('students.show', compact('data','passport','contact'));
    }
}

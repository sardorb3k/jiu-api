<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Department
    public function index()
    {
        $data = Department::get();
        return view('department.index', compact('data'));
    }
    // create
    public function create(Request $request)
    {
        $id = Auth::user()->id;
        try {
            Department::create([
                'user_id' => $id,
                'name' => $request->name,
                'description' => $request->description,
            ]);
            return redirect()->route('departments')->with('success', 'Description Created Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('departments')->with('error', $th);
        }
    }
    // delete
    public function delete(Request $request)
    {
        try {
            Department::where('id', $request->id)->delete();
            return redirect()->route('departments')->with('success', 'Deleted');
        } catch (\Throwable $th) {
            return redirect()->route('departments')->with('error', $th);
        }
    }
}

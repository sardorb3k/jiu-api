<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\RoleHasPermission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // role view
    public function role_view()
    {
        $data = Role::get();
        return view('role.index', compact('data'));
    }
    public function role_show($id)
    {
        $data = Role::findOrFail($id);
        $permission = Permission::get();
        $role_permission = RoleHasPermission::leftJoin('permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
            ->select('permissions.name', 'permissions.key', 'role_has_permissions.*')
            ->get();
        return view('role.show', compact('data', 'permission', 'role_permission'));
    }
    public function role_permission_add(Request $request)
    {
        try {
            $check_student_id = RoleHasPermission::where(
                'role_id',
                $request->role_id
            )
                ->where('permission_id', $request->permission_id)
                ->first();
            if (!$check_student_id) {
                RoleHasPermission::create([
                    'role_id' => $request->role_id,
                    'permission_id' => $request->permission_id,
                ]);
                return redirect()->route('role.show',$request->role_id)->with('success', 'role Created Successfully');
            }
            return redirect()->route('role.show',$request->role_id)->with('success', 'Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('role.show',$request->role_id)->with('success', $th);
        }
    }


    // role create
    public function role_create(Request $request)
    {
        try {
            Role::create([
                'name' => $request->name,
                'key' => $request->key,
            ]);
            return redirect()->route('role')->with('success', 'role Created Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('role')->with('success', $th);
        }
    }

    // Index
    public function index()
    {
        $data = Permission::get();
        return view('permission.index', compact('data'));
    }
    // permissions
    public function create(Request $request)
    {
        try {
            Permission::create([
                'name' => $request->name,
                'key' => $request->key,
            ]);
            return redirect()->route('permission')->with('success', 'permissions Created Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('permission')->with('success', $th);
        }
    }

    // delete
    public function delete($id)
    {
        # code...
    }
}

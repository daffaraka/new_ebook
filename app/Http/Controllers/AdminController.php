<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function editProfile($id)
    {
        $account = User::find($id);
        return view('admin.maintenance',['account'=>$account]);
    }


    public function updateProfile(Request $request, $id)
    {
       
        $account = User::find($id);

        $file =  $request->file('display_picture_link');
        
        $imagename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();

        $user = User::find($id);

        if($file){
            unlink('storage/user_pic/'.$user->display_picture_link);
            $file->move(public_path('storage/user_pic'),$request->first_name.'-'.$imagename);
        } else {
            unset($request);
        }
       
        $userAttribute = [];
        $userAttribute['first_name'] = $request->first_name;
        $userAttribute['middle_name'] = $request->middle_name;
        $userAttribute['last_name'] = $request->last_name;
        $userAttribute['email'] =  $request->email;
        $userAttribute['password'] =  Hash::make($request->password);
        $userAttribute['role_id'] = $request->role_id;
        $userAttribute['gender_id'] = $request->gender_id;
        $userAttribute['display_picture_link'] = $request->first_name.'-'.$imagename;

        User::find($id)->update($userAttribute);

        return redirect()->route('admin.role');
    }

    public function role()
    {
        
        $user = User::all();
        
     
        return view('admin.role-management',['user'=>$user]);
    }

    public function editRole($id)
    {
        $user = User::find($id);
        $userRoleId = User::pluck('role_id')->first();
        $roleName = Role::where('role_id',$userRoleId)->pluck('role_desc')->first();

        return view('admin.edit-role',['user'=>$user,'roleName'=>$roleName]);
    }

    public function updateRole($id,Request $request)
    {
        $role = [];
        $role['role_id'] = $request->role_id;
        User::find($id)->update($role);

        return redirect()->route('admin.role');
    }
}

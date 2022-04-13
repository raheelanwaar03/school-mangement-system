<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    public function addStudent()
    {
        $user = admin::get();
        return view('admin.addStudent', compact('user'));
    }
    public function storeData( Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'adderss' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]); 
        $user = new admin();
        $user->fullname = $request->fullname;          
        $user->email = $request->email;          
        $user->adderss = $request->adderss;      
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('success','User Added Successfully');
    }
    public function showUser()
    {
        $users = admin::where('status','active')->get();
        return view('admin.show',compact('users'));
    
    }
    
    public function edit($id)
    {
        $user = admin::find($id);
        return view('admin.edit',compact('user'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'adderss' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        $user = admin::find($request->id);
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->adderss = $request->adderss;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('success','User Updated Successfully');
    }


    public function destroy($id)
    {
        $user = admin::find($id);
        $user->delete();
        return redirect()->back()->with('success','User Deleted Successfully');
    }

    //suspended Users
    public function suspended()
    {
        $users = admin::where('status','suspended')->get();
        return view('admin.suspended',compact('users'));
    }

    public function suspend($id)
    {
        $user = admin::find($id);
        $user->status = 'suspended';
        $user->save();
        return redirect()->back()->with('success','User Suspended Successfully');
    }

    //dived according to their role

    public function teacherRole()
    {
        $users = admin::where('role','teacher')->get();
        return view('admin.teacher',compact('users'));
    }

    public function principalRole()
    {
        $users = admin::where('role','principal')->get();
        return view('admin.principal',compact('users'));
    }

    public function studentRole()
    {
        $users = admin::where('role','student')->get();
        return view('admin.student',compact('users'));
    }
   
}
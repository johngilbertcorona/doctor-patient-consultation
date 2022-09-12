<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Log in Logic ------------------------------------
    public function validate_login(Request $request)
    {
        //Validate Login input
        $request->validate([
            'username'      => ['required'],
            'password'      => ['required'],
            'role'          => ['required'],
        ]);

        $credentials = $request->only('username', 'password', 'role');

        if (Auth::attempt($credentials)) {

            if ($request->role == '1') {

                // Successful login for doctor
                return redirect('patient/dashboard');
            } elseif ($request->role == '2') {

                // Successful login for patient
                return redirect('doctor/dashboard');
            }
            return redirect('admin/dashboard');
        }

        // Failed login Authentication
        return redirect('login')->with('message', 'username or password does not match our records');
    }

    // Logout Logic ----------------------------------------------
    public function logoutUser()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }


    // Registration Logic --------------------------------
    public function validate_registration(Request $request)
    {


        // Validate registration
        $request->validate([

            'fname'       =>  ['required'],
            'lname'       =>  ['required'],
            'username'    =>  ['required'],
            'email'       =>  ['required', 'email', 'unique:users'],
            'password'    =>  ['required', 'min:8'],
            'role'        =>  ['required', 'max:1'],
        ]);

        // Insert Registration data into database
        User::create([
            'fname'        =>  $request->fname,
            'lname'        =>  $request->lname,
            'username'    =>  $request->username,
            'email'       =>  $request->email,
            'password'    =>  Hash::make($request->password),
            'role'        =>  $request->role,
        ]);

        return redirect('register')->with('message', 'Success, Please login to continue');
    }
}

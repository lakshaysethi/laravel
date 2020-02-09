<?php

namespace App\Http\Controllers;

use App\User;
use App\Suburb;

//use Illuminate\Http\Request;
use Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller
{
    public function index() {
        $suburbs = Suburb::all();
        return view('signUp', compact('suburbs'));
    }

    public function addUser(Request $request) {
        $newUser = new User;

        $newUser->firstname = Request::get('firstname');
        $newUser->lastname = Request::get('lastname');
        $newUser->suburb = Request::get('suburb');
        $newUser->dob = Request::get('dob');
        $newUser->email = Request::get('email');
        $newUser->password = Request::get('password');

        $newUser->save();

        echo "<script>alert('stored successfully');</script>";
        return view('signUp');
    }
}

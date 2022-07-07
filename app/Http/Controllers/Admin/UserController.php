<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Admins');

    }
    public function Users(){
        $users = User::orderBy('role','Desc')->get();
        $data = ['users' => $users];
        return view('Admin.Users.Home', $data);
    }
}

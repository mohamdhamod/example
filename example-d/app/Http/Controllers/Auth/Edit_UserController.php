<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Edit_UserController extends Controller
{
    //
    public function index ($id){

        return view('auth.update_user_information');
    }


}

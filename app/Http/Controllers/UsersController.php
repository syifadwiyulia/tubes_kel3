<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    function index()
    {
        return view("user/index");
    }
    function login()
    {

    }
}

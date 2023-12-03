<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Losts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index(Request $request) 
    $losts = Losts::all();

        return view('losts.index', [
            'losts' => $losts]);
}


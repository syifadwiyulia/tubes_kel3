<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoudsController extends Controller
{
    public function index(Request $request) 
    $founds = Founds::all();

        return view('founds.index', [
            'founds' => $founds]);
    }


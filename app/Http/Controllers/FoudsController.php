<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Founds;

class ArticleController extends Controller
{
    public function index(Request $request) {
        /* menggunakan eloquent */
        $founds = Founds::all();

        return view('founds.index', [
            'founds' => $founds]);
    }
}
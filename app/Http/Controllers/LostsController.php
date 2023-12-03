<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Losts;

class ArticleController extends Controller
{
    public function index(Request $request) {
        /* menggunakan eloquent */
        $losts = Losts::all();

        return view('losts.index', [
            'losts' => $losts]);
    }
}
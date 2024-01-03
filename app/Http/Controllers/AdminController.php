<?php

namespace App\Http\Controllers;
use App\Models\Founds;
use App\Models\Losts;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request) 
    {
        if($request->has('cari')){
            $founds = Founds::where('name','LIKE','%'.$request->cari.'%')->get();
            $losts = Losts::where('name','LIKE','%'.$request->cari.'%')->get();
        }else{
            /* menggunakan eloquent */
            $founds = Founds::all();
            $losts = Losts::all();
        }
        return view('admin.index', [
            'founds' => $founds, 'losts' => $losts]);

    }
}

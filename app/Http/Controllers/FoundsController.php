<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Founds;
use Illuminate\Support\Facades\Session;

class FoundsController extends Controller
{
    public function index(Request $request) {
        /* menggunakan eloquent */
        $founds = Founds::all();

        return view('founds.index', [
            'founds' => $founds]);
    }

    public function detail($id) {
        /* menggunakan eloquent */
        $founds = Founds::find($id)->first();
        return view('founds.detail',['founds' => $founds]);
    }

    public function edit($id)
    {
        $founds = Founds::findOrFail($id);
        return view('founds.edit', ['founds' => $founds]);
    } 

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $founds = Founds::findOrFail($id);

        $founds->update($request->all());

        if($founds) {
            Session::flash('status', 'success');
            Session::flash('message', 'Pengubahan data berhasil');
        }

        return redirect('/founds'); 
    }

    public function new()
    {
        return view('founds.new');
    }

    public function store(Request $request)
    {
        $founds = Founds::create($request->all());
        if ($founds) {
            Session::flash('status', 'success');
            Session::flash('message', 'Penambahan data berhasil');
        }

        return redirect('/founds');
    }

    public function delete($id)
    {
        $founds = Founds::findOrFail($id);
        return view('founds.delete', ['founds' => $founds]);
    }

    public function destroy($id)
    {
        $founds = Founds::findOrFail($id);
        $founds->delete();

        if ($founds) {
            Session::flash('status', 'success');
            Session::flash('message', 'Penghapusan data kategori ' . $founds->name . ' berhasil');
        }
        return redirect('/founds');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Losts;
use Illuminate\Support\Facades\Session;

class LostsController extends Controller
{
    public function index(Request $request) {
        /* menggunakan eloquent */
        $losts = Losts::all();

        return view('losts.index', [
            'losts' => $losts]);
    }

    public function detail($id) {
        /* menggunakan eloquent */
        $losts = losts::find($id)->first();
        return view('losts.detail',['losts' => $losts]);
    }

    public function edit($id)
    {
        $losts = Losts::findOrFail($id);
        return view('losts.edit', ['losts' => $losts]);
    } 

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $losts = Losts::findOrFail($id);

        $losts->update($request->all());

        if($losts) {
            Session::flash('status', 'success');
            Session::flash('message', 'Pengubahan data berhasil');
        }

        return redirect('/losts'); 
    }

    public function new()
    {
        return view('losts.new');
    }

    public function store(Request $request)
    {
        $losts = Losts::create($request->all());
        if ($losts) {
            Session::flash('status', 'success');
            Session::flash('message', 'Penambahan data berhasil');
        }

        return redirect('/losts');
    }

    public function delete($id)
    {
        $losts = Losts::findOrFail($id);
        return view('losts.delete', ['losts' => $losts]);
    }

    public function destroy($id)
    {
        $losts = Losts::findOrFail($id);
        $losts->delete();

        if ($losts) {
            Session::flash('status', 'success');
            Session::flash('message', 'Penghapusan data kategori ' . $losts->name . ' berhasil');
        }
        return redirect('/losts');
    }
}
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
        $losts = losts::find($id);
        return view('losts.detail',['losts' => $losts]);
    }

    public function edit($id)
    {
        $losts = Losts::findOrFail($id);
        return view('losts.edit', ['losts' => $losts]);
    } 

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $losts = Losts::findOrFail($id);

        $losts->update($request->all());

        if($request->hasFile('photo')){
            $request->file('photo')->move('img/',$request->file('photo')->getClientOriginalName());
            $losts->photo = $request->file('photo')->getClientOriginalName();
            $losts->save();
        }

        return redirect('/losts/'.$id)->withSuccess('Data Changed Successfully');
    }

    public function new()
    {
        return view('losts.new');
    }

    public function store(Request $request)
    {
        $losts = new \App\Models\Losts();
        $losts->name = $request->name;
        $losts->photo = $request->photo;
        $losts->items = $request->items;
        $losts->date_lost = $request->date_lost;
        $losts->description = $request->description;
        $losts->category = $request->category;
        $losts->brand = $request->brand;
        $losts->lost_place = $request->lost_place;
        $losts->detail_loc = $request->detail_loc;
        $losts->contact = $request->contact;
        $losts->keterangan = 'not yet found';
        if($request->hasFile('photo')){
            $request->file('photo')->move('img/',$request->file('photo')->getClientOriginalName());
            $losts->photo = $request->file('photo')->getClientOriginalName();
            $losts->save();
        }
        $losts->save();
        return redirect('/founds')->withSuccess('Data Added Successfully!');;;
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
        return redirect('/homepageadmin');
    }
}
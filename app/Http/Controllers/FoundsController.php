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
        $founds = Founds::find($id);
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

        if($request->hasFile('photo')){
            $request->file('photo')->move('img/',$request->file('photo')->getClientOriginalName());
            $founds->photo = $request->file('photo')->getClientOriginalName();
            $founds->save();
        }

        return redirect('/founds/'.$id)->withSuccess('Data Changed Successfully');
    }

    public function new()
    {
        return view('founds.new');  
    }

    public function store(Request $request)
    {
        //$founds = Founds::create($request->all());

        //dd($request);
        $founds = new \App\Models\Founds();
        $founds->name = $request->name;
        $founds->photo = $request->photo;
        $founds->items = $request->items;
        $founds->date_found = $request->date_found;
        $founds->description = $request->description;
        $founds->category = $request->category;
        $founds->brand = $request->brand;
        $founds->where_found = $request->where_found;
        $founds->detail_loc = $request->detail_loc;
        $founds->contact = $request->contact;
        $founds->keterangan = 'not yet returned';
        if($request->hasFile('photo')){
            $request->file('photo')->move('img/',$request->file('photo')->getClientOriginalName());
            $founds->photo = $request->file('photo')->getClientOriginalName();
            $founds->save();
        }
        $founds->save();
        return redirect('/founds')->withSuccess('Data Added Successfully!');
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
        return redirect('/homepageadmin');
    }
}
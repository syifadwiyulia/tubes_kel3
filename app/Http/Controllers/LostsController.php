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

    public function edit($losts) 
    {
        $losts = Losts::findOrFail($id);
        return view('losts.edit', ['data' => $losts]);
        
    }
    public function update(Request $request, $losts)
    {
        // dd($request->all());
        $losts = Losts::findOrFail($losts);

        $losts->update($losts->all());

        return redirect('/losts');
    }

    public function new()
    {
        return view('losts.new');
        
    }

    public function store(Request $request)
    {
        $losts = Losts::create($request->all());
        return redirect('/losts');
    }

    public function delete($lost) {
        $losts = Losts::findOrFail($losts);
        return view ('losts.delete', ['data'=> $losts]);
    }

    public function destroy($losts)
    {
        $losts = Losts::findOrFail($losts);
        $losts->delete();
        return redirect('/categories');
    }
}

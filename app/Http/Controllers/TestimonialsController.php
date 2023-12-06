<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Testimonials;
use Illuminate\Support\Facades\Session;

class TestimonialsController extends Controller
{
    public function index(Request $request) {
        /* menggunakan eloquent */
        $testimonial = Testimonials::all();

        return view('testimonials.index', [
            'testimonials' => $testimonial]);
    }

    public function detail($id) {
        /* menggunakan eloquent */
        $testimonial = Testimonials::find($id)->first();
        return view('testimonials.detail',['testimonials' => $testimonial]);
    }

    public function edit($id)
    {
        $testimonial = Testimonials::findOrFail($id);
        return view('testimonials.edit', ['testimonials' => $testimonial]);
    } 

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $testimonial = Testimonials::findOrFail($id);

        $testimonial->update($request->all());

        if($testimonial) {
            Session::flash('status', 'success');
            Session::flash('message', 'Pengubahan data berhasil');
        }

        return redirect('/testimonials'); 
    }

    public function new()
    {
        return view('testimonials.new');
    }

    public function store(Request $request)
    {
        $testimonial = Testimonials::create($request->all());
        if ($testimonial) {
            Session::flash('status', 'success');
            Session::flash('message', 'Penambahan data berhasil');
        }

        return redirect('/testimonials');
    }

    public function delete($id)
    {
        $testimonial = Testimonials::findOrFail($id);
        return view('testimonials.delete', ['testimonials' => $testimonial]);
    }

    public function destroy($id)
    {
        $testimonial = Testimonials::findOrFail($id);
        $testimonial->delete();

        if ($testimonial) {
            Session::flash('status', 'success');
            Session::flash('message', 'Penghapusan data Testimonial ' . $testimonial->name . ' berhasil');
        }
        return redirect('/testimonials');
    }
}

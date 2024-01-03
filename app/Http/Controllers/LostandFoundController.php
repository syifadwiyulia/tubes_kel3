<?php

namespace App\Http\Controllers;

use App\Models\Losts;
use App\Models\Founds;
use Illuminate\Http\Request;

class LostandFoundController extends Controller
{
    public function lostandfound()
    {
        $losts = Losts::all();
        $founds = Founds::all();

        $campur = [$losts, $founds];
        
        return view('homepage.lostandfound',[
            'campur' => $campur]);    
        //return view('homepage.lostandfound',[
        //    'losts' => $losts,'founds' => $founds]);    
    }

}

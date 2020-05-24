<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\GymContent;
use App\Enum\Address;

class FitnessmapController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name;
        
        if ($name != '') {
            $gym_contents = DB::table('gym_contents')->where('name','like','%'.$name.'%')->simplePaginate(10);
        }else {
            $gym_contents = DB::table('gym_contents')->simplePaginate(10);
        }
        
        // $gym_contents = DB::table('gym_contents')->simplePaginate(10);
        return view('fitnessmap.index', ['gym_contents' => $gym_contents]);
    }
}

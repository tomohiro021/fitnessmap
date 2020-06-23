<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Enums\Status;

class FitnessmapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mypage(Request $request)
    {
        $gym_contents = Auth::user()->gymContents()
        ->where('gym_contents.status', [Status::Editting, Status::Applying])
        ->orderBy('updated_at')->get();
        
        return view('fitnessmap.mypage', compact('gym_contents'));
    }
}

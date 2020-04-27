<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsertDemoController extends Controller
{
    public function getIndex()
  {
  return view('insert.index');
  }
 
  public function confirm(\App\Http\Requests\InsertDemoRequest $request)
  {
  $data = $request->all();
  return view('insert.confirm')->with($data);
  }
}

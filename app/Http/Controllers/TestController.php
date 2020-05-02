<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    public function index(Request $request)
   {
      //フォーム入力画ページのviewを表示
      return view('test');
   }
   
    public function undertest(Request $request)
   {
      Storage::put($_FILES, $request);
      //フォーム入力画ページのviewを表示
      return view('undertest');
   }
   
    public function testend(Request $request)
   {
      $contents = Storage::get($_FILES);
      
      if ($request->file('goods_image')->isValid([])) {
        $filename = $request->file('goods_image')->storeAs('', $upload_name, 'public');
      }
      //フォーム入力画ページのviewを表示
      return view('testend');
   }
}

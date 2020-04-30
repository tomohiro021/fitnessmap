<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsertController extends Controller
{
   public function index()
   {
      //フォーム入力画ページのviewを表示
      return view('insert.index');
   }

   public function confirm(Request $request)
   {
      //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
      $request->validate([
         'name' => 'required',
         'zip-code' => 'required',
         'adress1'  => 'required',
         'adress2'  => 'required',
         'summary'  => 'required',
         'detail'  => 'required',
      ]);
      
      //フォームから受け取ったすべてのinputの値を取得
      $inputs = $request->all();
      
      //入力内容確認ページのviewに変数を渡して表示
      return view('insert.confirm', [
         'inputs' => $inputs,
      ]);
   }
    
   public function complete(Request $request)
   {
      //送信完了ページのviewを表示
      return view('insert.complete');
   }
}

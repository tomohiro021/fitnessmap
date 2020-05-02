<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gym;
use Illuminate\Support\Facades\Storage;

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
         'zip_code' => 'required',
         'address1'  => 'required',
         'address2'  => 'required',
         'summary'  => 'required',
         'detail'  => 'required',
         'lat'  => 'required',
         'lng'  => 'required',
         'img1'  => 'image',
         'img2'  => 'image',
         'lmg3'  => 'image',
      ]);
      
      //フォームから受け取ったすべてのinputの値を取得
      $inputs = $request->all();
      
      // // アップロードしたファイル名を取得
      // $upload_name = $_FILES['img1']['name'];
      // //アップロードに成功しているか確認　>>>　保存
      // if ($request->file('img1')->isValid([])) {
      //     $filename = $request->file('img1')->storeAs('', $upload_name, 'public');
      // }
      
      //入力内容確認ページのviewに変数を渡して表示
      return view('insert.confirm', [
         'inputs' => $inputs,
      ]);
   }
    
   public function complete(Request $request)
   {
      // 新しいレコードの追加
      #Gymモデルクラスのオブジェクトを作成
      $gym = new Gym();
 
      #Gymモデルクラスのプロパティに値を代入
      $gym->name = $request->input('name');
      $gym->zip_code = $request->input('zip_code');
      $gym->address1 = $request->input('address1');
      $gym->address2 = $request->input('address2');
      $gym->lat = $request->input('lat');
      $gym->lng = $request->input('lng');
      $gym->summary = $request->input('summary');
      $gym->detail = $request->input('detail');
      // $gym->created_at = $request->input('created_at');
      // $gym->updated_at = $request->input('updated_at');
      
      #Gymモデルクラスのsaveメソッドを実行
      $gym->save();
      
      //送信完了ページのviewを表示
      return view('insert.complete');
   }
}

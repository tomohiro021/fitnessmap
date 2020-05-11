<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gym;
use App\GymContent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GymContentsController extends Controller
{
    public function control(Request $request)
   {
      //管理者のviewを表示
      return view('gym.control');
   }
   
    public function home(Request $request)
   {
      //ホームページのviewを表示
      return view('gym.home');
   }
   
    public function info(Request $request)
   {
      $user_id = Auth::id();
      $gym_contents = DB::table('gym_contents')->where('user_id', $user_id)->get();
      //施設紹介ページのviewを表示
      return view('gym.info')->with(['gym_contents' => $gym_contents]);
   }
   
    public function form(Request $request)
   {
      //フォーム入力画ページのviewを表示
      return view('gym.form');
   }
    
   public function complete(Request $request)
   {
      //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
      $request->validate([
         'gym_id' => 'required',
         'user_id' => 'required',
         'name' => 'required',
         'zip_code' => 'required',
         'address'  => 'required',
         'address1'  => 'required',
         'address2'  => 'required',
         'lat'  => 'required',
         'lng'  => 'required',
         'summary'  => 'required',
         'detail'  => 'required',
         // 'status'  => 'required',
      ]);
      
      // 新しいレコードの追加
      #Gymモデルクラスのオブジェクトを作成
      $gym_content = new GymContent();
 
      #Gymモデルクラスのプロパティに値を代入
      $gym_content->gym_id = $request->input('gym_id');
      $gym_content->user_id = $request->input('user_id');
      $gym_content->name = $request->input('name');
      $gym_content->zip_code = $request->input('zip_code');
      $gym_content->address = $request->input('address');
      $gym_content->address1 = $request->input('address1');
      $gym_content->address2 = $request->input('address2');
      $gym_content->lat = $request->input('lat');
      $gym_content->lng = $request->input('lng');
      $gym_content->summary = $request->input('summary');
      $gym_content->detail = $request->input('detail');
      $gym_content->status = $request->input('status');
      
      #Gymモデルクラスのsaveメソッドを実行
      $gym_content->save();
      
      // アップロードしたファイル名を取得
      $upload_name = $_FILES['img1']['name'];
      //アップロードに成功しているか確認　>>>　保存
      if ($request->file('img1')) {
         $filename = $request->file('img1')->storeAs('', $upload_name, 'public');
         return view('gym.complete');
      }else{
         //送信完了ページのviewを表示
         return view('gym.complete');
      }
   }
}

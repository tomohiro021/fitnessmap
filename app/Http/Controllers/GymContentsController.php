<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gym;
use App\GymContent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GymContentsController extends Controller
{
   public function gyms_create(Request $request)// gymsテーブル新規作成
   {
       return view('gym.gyms.create');
   }

   public function gyms_new(Request $request)
   {
       $param = [
           'id' => $request->id,
           'gym_content_id' => $request->gym_content_id,
           'publication_status' => $request->publication_status,
       ];
       DB::insert('insert into gyms (id, gym_content_id, publication_status) values (:id, :gym_content_id, :publication_status)', $param);
       return redirect('/control');
   }
   public function gyms_edit(Request $request)// gymsテーブル更新
   {
      $param = ['id' => $request->id];
      $item = DB::select('select * from gyms where id = :id', $param);
      return view('gym.gyms.edit', ['form' => $item[0]]);
   }
   
   public function gyms_update(Request $request)
   {
      $param = [
          'id' => $request->id,
          'gym_content_id' => $request->gym_content_id,
          'publication_status' => $request->publication_status,
      ];
      DB::update(
      'update gyms set gym_content_id =:gym_content_id,
      publication_status = :publication_status where id = :id', $param
      );
      return redirect('/control');
   }
   public function gyms_delete(Request $request)// gymsテーブル削除
   {
      $param = ['id' => $request->id];
      $item = DB::select('select * from gyms where id = :id', $param);
      return view('gym.gyms.delete', ['form' => $item[0]]);
   }
   
   public function gyms_remove(Request $request)
   {
      $param = ['id' => $request->id];
      DB::delete('delete from gyms where id = :id', $param);
      return redirect('/control');
   }
   public function gym_contents_edit(Request $request)// gym_contentsテーブル更新
   {
      $param = ['id' => $request->id];
      $item = DB::select('select * from gym_contents where id = :id', $param);
      return view('gym.gym_contents.edit', ['form' => $item[0]]);
   }
   
   public function gym_contents_update(Request $request)
   {
      $param = [
          'id' => $request->id,
          'gym_id' => $request->gym_id,
          'user_id' => $request->user_id,
          'name' => $request->name,
          'zip_code' => $request->zip_code,
          'address' => $request->address,
          'address1' => $request->address1,
          'address2' => $request->address2,
          'lat' => $request->lat,
          'lng' => $request->lng,
          'summary' => $request->summary,
          'detail' => $request->detail,
          'status' => $request->status,
      ];
      DB::update(
         'update gym_contents set gym_id = :gym_id, user_id = :user_id, name = :name,
         zip_code = :zip_code, address = :address, address1 = :address1, address2 = :address2,
         lat = :lat, lng = :lng, summary = :summary, detail = :detail, status = :status 
         where id = :id', $param
      );
      return redirect('/control');
   }
   public function gym_contents_delete(Request $request)// gym_contentsテーブル削除
   {
      $param = ['id' => $request->id];
      $item = DB::select('select * from gym_contents where id = :id', $param);
      return view('gym.gym_contents.delete', ['form' => $item[0]]);
   }
   
   public function gym_contents_remove(Request $request)
   {
      $param = ['id' => $request->id];
      DB::delete('delete from gym_contents where id = :id', $param);
      return redirect('/control');
   }
    public function home(Request $request)
   {
      //ホームページのviewを表示
      return view('gym.home');
   }
    public function info(Request $request)#--------------------------------------------------
   {
      $user_id = Auth::id();
      $gym_contents = DB::table('gym_contents')->where('user_id', $user_id)->get();
      // $param = ['id' => $request->id];
      // $gym_contents = DB::select('select * from gym_contents where id = :id', $param);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GymContent;
use Illuminate\Support\Facades\DB;

class GymContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gym_contents = GymContent::orderBy('id')->get();
        return view('gym_contents.index', ['gym_contents' => $gym_contents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gym_contents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
           return redirect('/gym_contents'); 
        }else{
           //送信完了ページのviewを表示
           return redirect('/gym_contents'); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gym_content = GymContent::find($id);
        return view('gym_contents.show', ['gym_content' => $gym_content]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gym_content = GymContent::find($id);
        return view('gym_contents.edit', ['gym_content' => $gym_content]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gym_content = GymContent::find($id);
        $gym_content->gym_id = $request->gym_id;
        $gym_content->user_id = $request->user_id;
        $gym_content->name = $request->name;
        $gym_content->zip_code = $request->zip_code;
        $gym_content->address = $request->address;
        $gym_content->address1 = $request->address1;
        $gym_content->address2 = $request->address2;
        $gym_content->lat = $request->lat;
        $gym_content->lng = $request->lng;
        $gym_content->summary = $request->summary;
        $gym_content->detail = $request->detail;
        $gym_content->status = $request->status;
        $gym_content->save();
        return redirect("/gym_contents/{$gym_content->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gym_content = GymContent::find($id);
        $gym_content->delete();
        return redirect('/gym_contents'); 
    }
}

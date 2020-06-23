<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gym;
use App\GymContent;
use App\Enums\PublicationStatus;
use App\Enums\Status;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GymContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $status = $request->status;
        $gym_id = $request->gym_id;
        
        if ($status != '') {
            $gym_contents = GymContent::where('status', $status)->orderBy('id')->get();
        }elseif ($gym_id != ''){
            $gym_contents = GymContent::where('gym_id', $gym_id)->orderBy('id')->get();
        }else {
            $gym_contents = GymContent::orderBy('id')->get();
        }
        
        return view('gym_contents.index', ['gym_contents' => $gym_contents, 'status' => $status, 'gym_id' =>$gym_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $gym_content = new GymContent();
        $gym_content->user_id = Auth::id();
        $gym_content->status = Status::Editting;
        
        $default_keywords = [];
        
        $source_gym_content_id = $request->source_gym_content_id;
        if (!empty($source_gym_content_id)) {
            $source = GymContent::find($source_gym_content_id);
            
            $gym_content->gym_id = $source->gym_id;
            $gym_content->name = $source->name;
            $gym_content->zip_code = $source->zip_code;
            $gym_content->address = $source->address;
            $gym_content->address1 = $source->address1;
            $gym_content->address2 = $source->address2;
            $gym_content->lat = $source->lat;
            $gym_content->lng = $source->lng;
            $gym_content->summary = $source->summary;
            $gym_content->detail = $source->detail;
            
            // gym_contents.idが保存されていないと、saveやsyncが利用できないようなので、配列を渡す。
            $default_keywords = $source->keywords()->get()->pluck('id')->toArray();
        }
        return view('gym_contents.create', compact('gym_content', 'default_keywords'));
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
           'name' => 'required',
           'zip_code' => 'required',
           'address'  => 'required',
           'address1'  => 'required',
           'address2'  => 'required',
           'lat'  => 'required',
           'lng'  => 'required',
           'summary'  => 'required',
           'detail'  => 'required',
        ]);
      
        $gym_id = $request->input('gym_id');
        if (empty ($gym_id)) {
            // 新しいレコードの追加
            $gym = new Gym();
            $gym->publication_status = PublicationStatus::Private;
            $gym->save();
        } else {
            $gym = Gym::find($gym_id);
        }
    
        $gym_content = new GymContent();
        $gym_content->gym_id = $gym->id;
        $gym_content->user_id = Auth::id();
        $gym_content->name = $request->input('name');
        $gym_content->zip_code = $request->input('zip_code');
        $gym_content->address = $request->input('address');
        $gym_content->address1 = $request->input('address1');
        $gym_content->address2 = $request->input('address2');
        $gym_content->lat = $request->input('lat');
        $gym_content->lng = $request->input('lng');
        $gym_content->summary = $request->input('summary');
        $gym_content->detail = $request->input('detail');
        $gym_content->status = ($request->input('applying') === 'applying') ? Status::Applying : Status::Editting;
      
        $gym_content->save();// Gymモデルクラスのsaveメソッドを実行

        // gym_content.idが無いとキーワードの保存ができないのでsaveの後に実行する
        $gym_content->keywords()->sync($request->keywords);
        
        return redirect()->route('gym_contents.show', $gym_content->id);
        
        // // アップロードに成功しているか確認　>>>　保存
        // if ($request->file('img1')) {
        //     $upload_name = $_FILES['img1']['name'];// アップロードしたファイル名を取得
        //     $gym_content->upload_name = $request->$upload_name;
        //     $request->file('img1')->storeAs('', $upload_name, 'public');
        //     $gym_content->save();// Gymモデルクラスのsaveメソッドを実行
        //     return redirect('/gym_contents');
        // }else{
        //     $gym_content->save();// Gymモデルクラスのsaveメソッドを実行
        //     return redirect('/gym_contents');
        // }
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
        return view('gym_contents.show', compact('gym_content'));
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
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
           'name' => 'required',
           'zip_code' => 'required',
           'address'  => 'required',
           'address1'  => 'required',
           'address2'  => 'required',
           'lat'  => 'required',
           'lng'  => 'required',
           'summary'  => 'required',
           'detail'  => 'required',
        ]);
        
        $gym_content = GymContent::find($id);
        $gym_content->gym_id = $request->gym_id;
        $gym_content->user_id = Auth::id();
        $gym_content->name = $request->name;
        $gym_content->zip_code = $request->zip_code;
        $gym_content->address = $request->address;
        $gym_content->address1 = $request->address1;
        $gym_content->address2 = $request->address2;
        $gym_content->lat = $request->lat;
        $gym_content->lng = $request->lng;
        $gym_content->summary = $request->summary;
        $gym_content->detail = $request->detail;
        $gym_content->status = ($request->input('applying') === 'applying') ? Status::Applying : Status::Editting;

        $gym_content->keywords()->sync($request->keywords);        

        $gym_content->save();
        
        return redirect()->route('gym_contents.show', $gym_content->id);
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
    
    /**
     * Approve GymContents.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function approve($id)
    {
        $gym_content = GymContent::find($id);
        $gym_content->status = Status::Approved;
        $gym_content->save();
        
        return redirect()->route('gyms.show', $gym_content->gym_id);
    }
}

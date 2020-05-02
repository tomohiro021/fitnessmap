<?php

namespace App\Http\Middleware;

use Closure;

class FileUpload
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
    
    public function terminate($request, $response)
    {
        // アップロードしたファイル名を取得
        $upload_name = $_FILES['img1']['name'];
        //アップロードに成功しているか確認　>>>　保存
        if ($request->file('img1')->isValid([])) {
            $filename = $request->file('img1')->storeAs('', $upload_name, 'public');
        }
        // セッションデーターの保存…
    }
}

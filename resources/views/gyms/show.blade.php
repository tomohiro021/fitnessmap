@extends('layouts.app')

@section('content')
<div class="container">
    <h3><a href="{{ route('gyms.index') }}">管理者ページ</a></h3>
    <h4 class="text-secondary">Gyms詳細ページ</h4>
    <table class="table table-sm">
        <tr>
            <th>id: </th>
            <td>{{$gym->id}}</td>
        </tr>
       <tr>
         <th>publication_status: </th>
         <td>{{$gym->publication_status}}</td>
       </tr>
       <tr>
         <th></th>
         <td><a href="/gyms/{{$gym->id}}/edit">編集</a></td>
       </tr>
    </table>
    <h4>現在公開中のコンテンツ</h4>
    @include('gym_contents._content', ['gym_content'=>$gym_content])
</div>
@endsection

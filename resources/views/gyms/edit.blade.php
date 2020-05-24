@extends('layouts.app')

@section('content')
<div class="container">
    <h3><a href="{{ route('gyms.index') }}">管理者ページ</a></h3>
    <h4 class="text-secondary">Gyms更新ページ</h4>
    <table class="table table-sm">
        <form action="/gyms/{{ $gym->id }}" method="post">
            @method('PUT')
            @csrf
            <tr>
              <th>publication_status: </th>
              <td><input type="text" name="publication_status" value="{{$gym->publication_status}}"></td>
            </tr>
            <tr><th></th><td><input type="submit" value="更新"></td></tr>
        </form>
        <form action="/gyms/{{ $gym->id }}" method="post">
            @method('DELETE')
            @csrf
            <tr><th></th><td><input type="submit" value="削除"></td></tr>
        </form>
    </table>
</div>
@endsection

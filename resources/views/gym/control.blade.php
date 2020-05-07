@extends('layouts.gym_home')

@section('content')
<div class="container">
    <h2><a href="{{ route('gym.control') }}">管理者ページ</a></h2>
    <h3 class="text-secondary">テーブル一覧</h3>
    <h4 class="">Users</h4>
    <form method="get" action="{{ route('gym.control') }}">
        @csrf
        <input type="text" name="id" value="" placeholder="ID ※半角英数"　pattern="^[0-9A-Za-z]+$">
        <input type="submit" value="検索">
    </form>
    <form method="get" action="{{ route('register') }}">
        @csrf
        <input type="submit" value="新規作成">
    </form>
    <form method="get" action="{{ route('gym.users.edit') }}">
        @csrf
        <input type="text" name="id" value="" placeholder="ID（更新）※半角英数" pattern="^[0-9A-Za-z]+$">
        <input type="submit" value="更新">
    </form>
    <form method="get" action="{{ route('gym.users.delete') }}">
        @csrf
        <input type="text" name="id" value="" placeholder="ID（削除）※半角英数" pattern="^[0-9A-Za-z]+$">
        <input type="submit" value="削除">
    </form>
    <table class="table table-sm">
    <tr>
        <th>Id</th><th>Name</th><th>Email</th>
        <th>Email_verified_at</th><th>Password</th><th>Remember_token</th>
        <th>Created_at</th><th>Updated_at</th><th>Gender</th>
    </tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->email_verified_at}}</td>
            <td>{{$item->password}}</td>
            <td>{{$item->remember_token}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
            <td>{{$item->gender}}</td>
        </tr>
    @endforeach
    </table>
    <h4>Gyms</h4>
    <form method="get" action="{{ route('gym.gyms.create') }}">
        @csrf
        <input type="submit" value="新規作成">
    </form>
    <form method="get" action="{{ route('gym.gyms.edit') }}">
        @csrf
        <input type="text" name="id" value="" placeholder="ID（更新）※半角英数" pattern="^[0-9A-Za-z]+$">
        <input type="submit" value="更新">
    </form>
    <form method="get" action="{{ route('gym.gyms.delete') }}">
        @csrf
        <input type="text" name="id" value="" placeholder="ID（削除）※半角英数" pattern="^[0-9A-Za-z]+$">
        <input type="submit" value="削除">
    </form>
    <table class="table table-sm">
    <tr>
        <th>Id</th><th>Gym_Content_Id</th><th>publication_status</th>
        <th>Created_at</th><th>Updated_at</th>
    </tr>
    @foreach ($items1 as $item1)
        <tr>
            <td>{{$item1->id}}</td>
            <td>{{$item1->gym_content_id}}</td>
            <td>{{$item1->publication_status}}</td>
            <td>{{$item1->created_at}}</td>
            <td>{{$item1->updated_at}}</td>
        </tr>
    @endforeach
    </table>
    <h4>Gym_contents</h4>
    <form method="get" action="{{ route('gym.form') }}">
        @csrf
        <input type="submit" value="新規作成">
    </form>
    <form method="get" action="{{ route('gym.gym_contents.edit') }}">
        @csrf
        <input type="text" name="id" value="" placeholder="ID（更新）※半角英数" pattern="^[0-9A-Za-z]+$">
        <input type="submit" value="更新">
    </form>
    <form method="get" action="{{ route('gym.gym_contents.delete') }}">
        @csrf
        <input type="text" name="id" value="" placeholder="ID（削除）※半角英数" pattern="^[0-9A-Za-z]+$">
        <input type="submit" value="削除">
    </form>
    <table class="table table-sm">
        <tr>
            <th>Id</th><th>Gym_id</th><th>User_id</th>
            <th>Name</th><th>Zip_code</th><th>address</th>
            <th>address1</th><th>address2</th><th>lat</th>
            <th>lng</th><th>summary</th><th>detail</th>
            <th>status</th><th>Created_at</th><th>Updated_at</th>
        </tr>
    @foreach ($items2 as $item2)
        <tr>
            <td>{{$item2->id}}</td>
            <td>{{$item2->gym_id}}</td>
            <td>{{$item2->user_id}}</td>
            <td>{{$item2->name}}</td>
            <td>{{$item2->zip_code}}</td>
            <td>{{$item2->address}}</td>
            <td>{{$item2->address1}}</td>
            <td>{{$item2->address2}}</td>
            <td>{{$item2->lat}}</td>
            <td>{{$item2->lng}}</td>
            <td>{{$item2->summary}}</td>
            <td>{{$item2->detail}}</td>
            <td>{{$item2->status}}</td>
            <td>{{$item2->created_at}}</td>
            <td>{{$item2->updated_at}}</td>
        </tr>
    @endforeach
    </table>
</div>
@endsection

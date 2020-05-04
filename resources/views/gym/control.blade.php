@extends('layouts.gym_home')

@section('content')
<div class="container">
    <h1>管理者画面</h1>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('gym.control') }}">管理画面トップ</a>
      </li>
    </ul>
    <h3>usersTable</h3>
     <form action="{{ route('gym.users') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" name="users_id" class="form-control" placeholder="更新データIDを入力">
            <input type="submit" value="送信">
        </div>
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
    <h3>gymsTable</h3>
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
    <h3>gym_contentsTable</h3>
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

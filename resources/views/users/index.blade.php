@extends('layouts.app')

@section('content')
<div class="container">
    <h3><a href="#">管理者ページ</a></h3>
    <h4 class="text-secondary">Users</h4>
    <table class="table table-sm">
        <tr>
            <th>id</th><th>name</th><th>email</th><th>role</th><th>gender</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td><a href = "{{ route('users.show', $user->id) }}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td>{{$user->gender->description}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection

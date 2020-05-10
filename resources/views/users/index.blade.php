@extends('layouts.gym_home')

@section('content')
<div class="container">
    <h3 class="text-secondary">Users</h3>
    <table class="table table-sm">
        <tr>
            <th>Id</th><th>Name</th><th>Email</th><th>Gender</th>
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

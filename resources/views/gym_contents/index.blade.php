@extends('layouts.gym_home')

@section('content')
<div class="container">
    <h3><a href="#">管理者ページ</a></h3>
    <h4 class="text-secondary">Gym_contents</h4>
    <a href = "{{ route('gym_contents.create') }}">新規作成</a>
    <table class="table table-sm">
        @foreach ($gym_contents as $gym_content)
        <tr>
            <th>Id</th><th>Gym_id</th><th>User_id</th>
            <th>Name</th><th>Zip_code</th><th>address</th>
            <th>address1</th><th>address2</th><th>lat</th>
            <th>lng</th><th>summary</th><th>detail</th>
            <th>status</th>
        </tr>
        <tr>
            <td>{{$gym_content->id}}</td>
            <td>{{$gym_content->gym_id}}</td>
            <td>{{$gym_content->user_id}}</td>
            <td><a href = "{{ route('gym_contents.show', $gym_content->id) }}">{{$gym_content->name}}</a></td>
            <td>{{$gym_content->zip_code}}</td>
            <td>{{$gym_content->address->description}}</td>
            <td>{{$gym_content->address1}}</td>
            <td>{{$gym_content->address2}}</td>
            <td>{{$gym_content->lat}}</td>
            <td>{{$gym_content->lng}}</td>
            <td>{{$gym_content->summary}}</td>
            <td>{{$gym_content->detail}}</td>
            <td>{{$gym_content->status->description}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection

@extends('layouts.gym_home')

@section('content')
<div class="container">
    <h2><a href="#">管理者ページ</a></h2>
    <h4>Gyms</h4>
    <table class="table table-sm">
        <tr>
            <th>Id</th><th>Gym_Content_Id</th><th>publication_status</th>
        </tr>
        @foreach ($gyms as $gym)
            <tr>
                <td>{{$gym->id}}</td>
                <td><a href = "{{ route('gyms.show', $gym->id) }}">{{$gym->gym_content_id}}</a></td>
                <td>{{$gym->publication_status}}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection

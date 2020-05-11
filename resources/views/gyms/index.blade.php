@extends('layouts.gym_home')

@section('content')
<div class="container">
    <h3><a href="#">管理者ページ</a></h3>
    <h4 class="text-secondary">Gyms</h4>
    <table class="table table-sm">
        <tr>
            <th>id</th><th>gym_content_id</th><th>publication_status</th>
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

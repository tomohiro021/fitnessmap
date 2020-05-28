@extends('layouts.app')

@section('content')
<div class="container">
    <h3><a href="#">管理者ページ</a></h3>
    <h4 class="text-secondary">Gyms</h4>
    <table class="table table-sm">
        <tr>
            <th>id</th>
            <th>publication_status</th>
            <th>コンテンツ</th>
            <th>ステータス</th>
        </tr>
        @foreach ($gyms as $gym)
            <tr>
                <td><a href = "{{ route('gyms.show', $gym->id) }}">{{$gym->id}}</a></td>
                <td>{{$gym->publication_status->description}}</td>
            @if ($gym->publicatedGymContent() != null)
                <td>{{$gym->publicatedGymContent()->name}}</td>
                <td>{{$gym->publicatedGymContent()->status->description}}</td>
            @endif
            @if ($gym->noapprovedGymContent() != null)
                <td>{{$gym->noapprovedGymContent()->name}}</td>
                <td>{{$gym->noapprovedGymContent()->status->description}}</td>
            @endif
            </tr>
        @endforeach
    </table>
    <h5>編集中/承認申請中コンテンツ</h5>
    <table class="table table-sm">
    @foreach ($gyms as $gym)
        @if ($gym->noapprovedGymContent() != null)
            <tr>
                <td>{{$gym->userNoapprovedGymContent()->name}}</td>
                <td>{{$gym->userNoapprovedGymContent()->status->description}}</td>
            </tr>
        @endif
    @endforeach
    </table>
    <h5>公開中コンテンツ</h5>
    <table class="table table-sm">
    @foreach ($gyms as $gym)
        @if ($gym->publicatedGymContent() != null)
            <tr>
                <td><a href = "{{ route('gym_contents.show', $gym->publicatedGymContent()->id) }}">{{$gym->publicatedGymContent()->name}}</a></td>
            </tr>
        @endif
    @endforeach
    </table>
</div>
@endsection

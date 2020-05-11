@extends('layouts.gym_home')

@section('content')
<div class="container">
    <h2><a href="#">管理者ページ</a></h2>
    <h3 class="text-secondary">テーブル一覧</h3>
    <h4><a href="{{ route('users.index') }}">Users</a></h4>
    <h4><a href="{{ route('gyms.index') }}">Gyms</a></h4>
    <h4><a href="{{ route('gym_contents.index') }}">Gym_contents</a></h4>
</div>
@endsection

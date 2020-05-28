@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-right">
        <a href="/gym_contents/{{$gym_content->id}}/edit" class="text-right">編集</a>
    </div>
</div>
@include('gym_contents._content', ['gym_content'=>$gym_content])
@endsection

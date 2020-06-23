@extends('layouts.app')

@section('content')
<div class="container">
    @if($gym_content->status->value == App\Enums\Status::Editting)
        <p>編集中のコンテンツ</p>
        <div class="text-right">
            <a href="/gym_contents/{{$gym_content->id}}/edit" class="text-right">編集</a>
        </div>
    @elseif($gym_content->status->value == App\Enums\Status::Applying)
        <p>承認申請中のコンテンツ</p>

        @can('system-only')
            <div class="text-right">
                <a href="/gym_contents/{{$gym_content->id}}/approve" onclick="return confirm('承認済みにしてもよろしいですか？');" class="text-right">承認する</a>
            </div>
        @endcan
    @endif
</div>
@include('gym_contents._content', ['gym_content'=>$gym_content])
@endsection

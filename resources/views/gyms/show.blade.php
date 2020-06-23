@extends('layouts.app')

@section('content')
<div class="container">
    @if (Auth::check() && isset($editting_gym_content))
        <div class="row">
            <div class="form-group col-md-12">
                <h5>あなたの編集中/承認申請中コンテンツ</h5>
                <table class="table table-sm">
                    <tr>
                        @if ($editting_gym_content->status->value == App\Enums\Status::Editting)
                            <td><a href = "{{ route('gym_contents.edit', $editting_gym_content->id) }}">{{$editting_gym_content->name}}</a></td>
                            <td>{{$editting_gym_content->status->description}}</td>
                        @elseif ($editting_gym_content->status->value == App\Enums\Status::Applying)
                            <td><a href = "{{ route('gym_contents.show', $editting_gym_content->id) }}">{{$editting_gym_content->name}}</a></td>
                            <td>{{$editting_gym_content->status->description}}</td>
                        @endif
                    </tr>
                </table>
            </div>
        </div>
    @endif
    <h4>現在公開中のコンテンツ</h4>
    @include('gym_contents._content', ['gym_content'=>$gym_content])
    
    @if (Auth::check() && !isset($editting_gym_content))
        <div class="row">
            <a href = "{{ route('gym_contents.create', ['source_gym_content_id' => $gym_content->id]) }}">編集を開始する</a>            
        </div>
    @endif
</div>
@endsection

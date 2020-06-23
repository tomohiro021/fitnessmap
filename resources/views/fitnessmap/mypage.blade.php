@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if (Auth::check())
            <div class="form-group col-md-12">
                <h5>あなたの編集中/承認申請中コンテンツ</h5>
                <table class="table table-sm">
                    @foreach ($gym_contents as $gym_content)
                        <tr>
                            @if ($gym_content->status = App\Enums\Status::Editting)
                                <td><a href = "{{ route('gym_contents.edit', $gym_content->id) }}">{{$gym_content->name}}</a></td>
                                <td>{{$gym_content->status->description}}</td>
                            @elseif ($gym_content->status = App\Enums\Status::Applying)
                                <td><a href = "{{ route('gym_contents.show', $gym_content->id) }}">{{$gym_content->name}}</a></td>
                                <td>{{$gym_content->status->description}}</td>
                            @else
                                <p>現在、編集中/承認申請中のコンテンツはありません。</p>
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>
        @endif
    </div>
</div>
@endsection

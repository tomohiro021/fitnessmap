@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('gym_contents.create') }}">新しいジムを作成する</a>
    @if (Auth::check() && !empty($editting_gym_contents))
        <div class="row">
            <div class="form-group col-md-12">
                <h5>あなたの編集中/承認申請中コンテンツ</h5>
                <table class="table table-sm">
                    @foreach($editting_gym_contents as $editting_gym_content)
                        <tr>
                            @if ($editting_gym_content->status = App\Enums\Status::Editting)
                                <td><a href = "{{ route('gym_contents.edit', $editting_gym_content->id) }}">{{$editting_gym_content->name}}</a></td>
                                <td>{{$editting_gym_content->status->description}}</td>
                            @elseif ($editting_gym_content->status = App\Enums\Status::Applying)
                                <td><a href = "{{ route('gym_contents.show', $editting_gym_content->id) }}">{{$editting_gym_content->name}}</a></td>
                                <td>{{$editting_gym_content->status->description}}</td>
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    @endif
    
    <form method="get">
        <div class="form-group col-md-12">
          <label for="name"></label>
          <input type="text" class="form-control" name="name" value="" placeholder="ジム名を入力">
          <input type="submit" class="" value="検索する">
        </div>
    </form>
    <table class="table table-sm">
        <tr>
            <th>id</th>
            <th>publication_status</th>
            <th>コンテンツ</th>
            <th>ステータス</th>
        </tr>
        @foreach ($gyms as $gym)
            <tr>
                <td><a href = "{{ route('gyms.show', $gym->gym_id) }}">{{$gym->gym_id}}</a></td>
                <td>{{$gym->publication_status}}</td>
                <td>{{$gym->name}}</td>
                <td>{{$gym->status}}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h3><a href="#">管理者ページ</a></h3>
    <h4 class="text-secondary">Gym_contents</h4>
    <div class="form-group col-md-10">
        <a href = "{{ route('gym_contents.create') }}">新規作成</a>
    </div>
    <form>
        <div class="form-group col-md-10">
            <label for="gym_id">gym_id</label>
            <input type="text" class="form-control" name="gym_id" value="">
        </div>
        <div class="form-group col-md-10">
            <label for="status">編集・承認待ち・承認済み</label>
            {{ Form::select(
              'status',
              [null=>'選択してください']+App\Enums\Status::toSelectArray(),
              '',
              ['class'=>'form-control', 'id'=>'status']
              )
            }}
        </div>
        <div class="form-group col-md-10">
            <input type="submit" class="form-control" value="検索">
        </div>
    </form>
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

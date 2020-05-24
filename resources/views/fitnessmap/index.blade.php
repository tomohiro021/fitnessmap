@extends('layouts.app')

@section('content')
<div class="container">
    <img src="images/stretching.jpg" class="img-fluid"　alt="ストレッチイラスト">
    <div class="row">
      <form>
        <div class="form-group col-md-10">
          <label for="name"></label>
          <input type="text" class="form-control" name="name" value="" placeholder="ジム名を入力">
          <input type="submit" class="" value="検索する">
        </div>
      </form>
      <div class="col-md-10">
        @foreach($gym_contents as $gym_content)
          <h3><a href = "{{ route('gym_contents.show', $gym_content->id) }}">{{ $gym_content->name }}</a></h3>
        @endforeach
      </div>
    </div>
</div>
@endsection

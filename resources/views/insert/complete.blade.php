@extends('layouts.master_insert')
@section('title', 'FitnessMap')

@section('content')
<h1>{{ __('送信完了') }}</h1>
<ul>
@foreach($fillable as $fill)
   <li>{{{ $fill }}}</li>   
@endforeach
</ul>
@endsection
@extends('layout')

@section('content')
    @foreach($users as $user)
    	<p><b>{{ $user->name }}:</b> {{ $user->email }}</p>
    @endforeach

    @lang('pagination.next')

@stop

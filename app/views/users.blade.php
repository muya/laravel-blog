@extends('layout')

@section('content')
    Users in layout!
    @foreach($users as $user)
    <p>{{ $user->name }}</p>
    @endforeach
@stop
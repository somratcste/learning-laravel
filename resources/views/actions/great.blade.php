@extends('layouts.master')
@section('content')
	<h1>I great {{$name == null ? 'you' : $name}} </h1>
@endsection
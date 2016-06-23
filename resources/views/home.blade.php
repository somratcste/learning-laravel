@extends('layouts.master')
@section('content')
	<a href="{{ route('great') }}">Great</a>
	<a href="{{ route('good') }}">Good</a>
	<a href="{{ route('best') }}">Best</a>
@endsection
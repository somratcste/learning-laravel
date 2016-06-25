@extends('layouts.master')
@section('content')	
	<center>
	<a href="{{ route('niceaction' , ['action' => 'great']) }}">Great</a>
	<a href="{{ route('niceaction' , ['action' => 'good']) }}">Good</a>
	<a href="{{ route('niceaction' , ['action' => 'best']) }}">Best</a>
	</center>
	<br />
	@if(count($errors) > 0)
		<div>
			<ul class="alert alert-danger">
				@foreach ($errors->all() as $error)
					{{$error}}
				@endforeach
			</ul>
		</div>
	@endif
	<form action="{{ route('benice') }}" method="post">
	<div class="row">
		<div class="col-md-6">
			<div class="col-md-3">
				<label for="select-action">You are .... </label>
			</div>
			<div class="col-md-9">
				<select class="form-control" id="select-action" name="action">
					<option >Select menu</option>
					<option value="great">Great</option>
					<option value="good">Good</option>
					<option value="best">Best</option>
				</select>
			</div>
		</div>
		<div class="col-md-3">		
			<input type="text" name="name" class="form-control" id="inputEmail3" placeholder="UserName">
		</div>
		<div class="col-md-3">
			<input type="submit" class="btn btn-primary" value="Submit"></input>
			<input type="hidden" name="_token" value="{{Session::token()}}" >
		</div>
	</div>
	</form>
@endsection
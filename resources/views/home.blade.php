@extends('layouts.master')
@section('content')	
	<center>
	<a href="{{ route('great') }}">Great</a>
	<a href="{{ route('good') }}">Good</a>
	<a href="{{ route('best') }}">Best</a>
	</center>
	<br />
	<form action="{{ route('benice') }}" method="post">
	<div class="row">
		<div class="col-md-6">
			<div class="col-md-3">
				<label for="select-action">You are .... </label>
			</div>
			<div class="col-md-9">
				<select class="form-control" id="select-action" name="action">
					<option selected>Select menu</option>
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
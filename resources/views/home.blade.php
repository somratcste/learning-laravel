@extends('layouts.master')
@section('content')	
	<center>
	@foreach ($actions as $action)
		<a href="{{ route('niceaction', ['action' => lcfirst($action->name)]) }}">{{$action->name}}</a>
	@endforeach
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
	<form action="{{ route('add_action') }}" method="post">
	<div class="row">
		<div class="col-md-6">
			<div class="col-md-3">
				<label for="select-action">Name of Actions : </label>
			</div>
			<div class="col-md-9">
				<input type="text" name="name" class="form-control" id="inputEmail3" placeholder="UserName">
				
			</div>
		</div>
		<div class="col-md-3">		
			<input type="text" name="niceness" class="form-control" id="inputEmail3" placeholder="Number">
		</div>
		<div class="col-md-3">
			<input type="submit" class="btn btn-primary" value="Submit"></input>
			<input type="hidden" name="_token" value="{{Session::token()}}" >
		</div>
	</div>
	</form>
	<br><br><br>
	<div class="row">
		<center>
			<ul>
				@foreach ($logged_actions as $logged_action)
					<li>{{$logged_action->nice_action->name}}</li>
				@endforeach
			</ul>
		</center>
	</div>
@endsection
@extends('layouts.master')
@section('content')
	<p>Computer Science and Telecommunication Engineering. Noakhali Science and Technology University. Computer Science and Telecommunication Engineering. Noakhali Science and Technology University.Computer Science and Telecommunication Engineering. Noakhali Science and Technology University.Computer Science and Telecommunication Engineering. Noakhali Science and Technology University.Computer Science and Telecommunication Engineering. Noakhali Science and Technology University.Computer Science and Telecommunication Engineering. Noakhali Science and Technology University.Computer Science and Telecommunication Engineering. Noakhali Science and Technology University.Computer Science and Telecommunication Engineering. Noakhali Science and Technology University.Computer Science and Telecommunication Engineering. Noakhali Science and Technology University.Computer Science and Telecommunication Engineering. Noakhali Science and Technology University.Computer Science and Telecommunication Engineering. Noakhali Science and Technology University.Computer Science and Telecommunication Engineering. Noakhali Science and Technology University.Computer Science and Telecommunication Engineering. Noakhali Science and Technology University.Computer Science and Telecommunication Engineering. Noakhali Science and Technology University.Computer Science and Telecommunication Engineering. Noakhali Science and Technology University.</p>
	<ul>
		@for($i=0; $i<5; $i++)
			@if($i % 2 ==0)
			<li>Iteration{{$i+1}}</li>
			@endif
		@endfor
	</ul>
@endsection
@extends('layout.main')
@section('title','KelasKu - Home')

@section('container')
<div class="container mt-5 pt-3">
	<div class="col-md-8 offset-md-2 d-flex justify-content-center align-content-center">
		<h2 class="display-1 mt-5">Hello There!</h2>
	</div>
	<div class="col-md-10 offset-md-1 text-center d-flex justify-content-center align-content-center mt-2">
		<h3 class="display-4">Welcome to KelasKu<br> Student's Data Management App</h3>
	</div>
	<div class="col-md-8 offset-md-2 text-center d-flex justify-content-center align-content-center mt-5">
		<a href="{{url('student')}}" class="btn btn-lg btn-outline-dark">Enter</a>
	</div>

</div>
@endsection
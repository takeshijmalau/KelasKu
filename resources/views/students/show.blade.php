@extends('layout.main')
@section('title','KelasKu - Student\'s Detail')

@section('container')
<div class="container">
	<div class="col-md-6 offset-md-3">
		<h1 class="display-4 text-center mt-5 ">STUDENT'S DETAIL</h1>
		<hr>
		<div class="row mx-auto d-flex justify-content-between">
			<div>
				<a href="http://localhost:8000/student" class="btn btn-sm btn-primary mb-3"><i class="fas fa-arrow-left"></i> Back</a>
			</div>
			<div class="d-flex align-item-center">
				<a href="http://localhost:8000/student/{{$student->id}}/edit" class="btn btn-sm btn-warning mb-3"><i class="fas fa-edit"></i> Edit</a>
				<form class="d-inline ml-3" action="/student/{{$student->id}}" method="post">
					 @method('delete')
                        @csrf
					<button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Delete</button>
				</form>
			</div>
		</div>
		<div class="alert alert-primary" role="alert">
			<dl class="row">
				<dt class="col-sm-4 text-right">Full Name</dt>
				<dd class="col-sm-8">{{$student->nama}}</dd>

				<dt class="col-sm-4 text-right">Student's ID</dt>
				<dd class="col-sm-8">{{$student->nim}}</dd>

				<dt class="col-sm-4 text-right">Email</dt>
				<dd class="col-sm-8">{{$student->email}}</dd>

				<dt class="col-sm-4 text-right">Major</dt>
				<dd class="col-sm-8">{{$student->prodi}}</dd>

				<dt class="col-sm-4 text-right">University</dt>
				<dd class="col-sm-8">{{$student->univ}}</dd>
			</dl>
		</div>
		<kbd>Takeshi &copy; 2021</kbd>
	</div>
</div>
@endsection
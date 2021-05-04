@extends('layout.main')
@section('title','KelasKu - Student\'s Detail')

@section('container')
<div class="container">
	<div class="col-md-6 offset-md-3">
		<h1 class="display-4 text-center mt-5 ">ADD NEW STUDENT</h1>
		<hr>
		<form method="post" action="http://localhost:8000/student">
			@csrf
			<div class="form-row">
				<div class="form-group col-md-7">
					<label for="nama">Full Name</label>
					<input type="text" class="form-control" id="nama" name="nama">
				</div>
				<div class="form-group col-md-5">
					<label for="nim">Student ID</label>
					<input type="text" class="form-control" id="nim" name="nim">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="email">Email</label>
					<input type="text" class="form-control" id="email" name="email">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-5">
					<label for="prodi">Major</label>
					<input type="text" class="form-control" id="prodi" name="prodi">
				</div>
				<div class="form-group col-md-7">
					<label for="univ">University</label>
					<input type="text" class="form-control" id="univ" name="univ">
				</div>
			</div>
			<div class="row mx-auto">
			<a href="http://localhost:8000/student" class="btn btn-primary mb-3 mt-3  col-md-2"><i class="fas fa-arrow-left"></i> Back</a>	

			<button type="submit" class="btn btn-success mb-3 mt-3 col-md-9 offset-md-1"><i class="fas fa-save"></i> Save Information</button>
			</div>
		</form>
		<kbd>Takeshi &copy; 2021</kbd>
	</div>
</div>
@endsection
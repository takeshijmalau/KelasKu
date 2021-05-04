@extends('layout.main')
@section('title','KelasKu - Student list')

@section('container')
<div class="container">
	<div class="col-md-6 offset-md-3">
		<h1 class="display-4 text-center mt-5 ">STUDENT LIST</h1>
		<hr>
		<div class="d-flex justify-content-end">
			
		</div>
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Student's Name</th>
		      <th scope="col">Student's ID</th>
		      <th scope="col" class="text-center">
		      	<a href="http://localhost:8000/student/add" class="btn btn-success btn-sm">
					<i class="fas fa-plus"></i>&nbsp;Add
				</a>
		      </th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach ($students as $i => $student)
		    <tr>
		      <th scope="row">{{$i+1}}</th>
		      <td>{{$student->nama}}</td>
		      <td>{{$student->nim}}</td>
		      <td class="text-center"><a href="/student/{{$student->id}}" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i> Detail</a></td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
	</div>
</div>
@endsection
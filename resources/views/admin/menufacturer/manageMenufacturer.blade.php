@extends('admin.master')
@section('content')

<hr/>
		<h2 class="text-center text-success">{{Session::get('message')}}</h2>
<hr/>

<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Menufacturer Name</th>
			<th>Menufacturer Description</th>
			<th>Publication Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($menufacturers as $menufacturer)
		<tr>
			<th scope="row">{{$menufacturer->id}}</th>
			<td>{{$menufacturer->menufacturerName}}</td>
			<td>{{$menufacturer->menufacturerDescription}}</td>
			<td>{{$menufacturer->publicationStatus==1?'Published':'Unpublished'}}</td>
			<td>
				<a href="{{url('/menufacturer/edit/'.$menufacturer->id)}}" class="btn btn-success">
					<span class="glyphicon glyphicon-edit"></span>
				</a>

				<a href="{{url('/menufacturer/delete/'.$menufacturer->id)}}" class="btn btn-danger" onclick="return confirm('Are You Sure to delete this');">
					<span class="glyphicon glyphicon-trash"></span>
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection
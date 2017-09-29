@extends('admin.master')
@section('content')
<hr/>

<div class="row">
	<div class="col-lg-12">
		<hr/>
		<div class="well">
			{!!Form::open(['url'=>'menufacturer/update','method'=>'POST','class'=>'form-horizontal','name'=>'editMenufacturerForm'])!!}
			<div class="form-group">
				<label for="inputEmail3"  class="col-sm-2 control-label">Menufacturer Name</label>
				<div class="col-sm-10">
					<input type="text" value="{{$menufacturerByid->menufacturerName}}" class="form-control" name="menufacturerName">
					<input type="hidden" value="{{$menufacturerByid->id}}" class="form-control" name="id">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Menufacturer Description</label>
				<div class="col-sm-10">
					<textarea class="form-control"  name="MenufacturerDescription" rows="8"> {{$menufacturerByid->menufacturerDescription}} </textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Publication Status</label>
				<div class="col-sm-10">
					<select class="form-control" name="publicationStatus">
						<option>Select Publication Statues</option>
						<option value="1">Published</option>
						<option value="0">Unpublished</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" name="btn" class="btn btn-success btn-block"> Update Menufacturer</button>
				</div>
			</div>
			{!!Form::close()!!}
		</div>
	</div>
	<script>
		document.forms['editMenufacturerForm'].elements['publicationStatus'].value={{$menufacturerByid->publicationStatus}}

	</script>

@endsection
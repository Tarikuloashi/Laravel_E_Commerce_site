@extends('admin.master')
@section('content')
<hr/>

<div class="row">
	<div class="col-lg-12">
		<h2 class="text-center text-success">{{Session::get('message')}}</h2>
		<hr/>
		<div class="well">
			{!!Form::open(['url'=>'menufacturer/save','method'=>'POST','class'=>'form-horizontal'])!!}
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Menufacturer Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="menufacturerName">
					<span class="text-danger">{{$errors->has('menufacturerName')?$errors->first('menufacturerName'):''}}</span>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Menufacturer Description</label>
				<div class="col-sm-10">
					<textarea class="form-control" name="menufacturerDescription" rows="8"></textarea>
					<span class="text-danger">{{$errors->has('menufacturerName')?$errors->first('menufacturerName'):''}}</span>
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
					<button type="submit" name="btn" class="btn btn-success btn-block " > Save Menufacturer</button>
				</div>
			</div>
			{!!Form::close()!!}
		</div>
	</div>

@endsection
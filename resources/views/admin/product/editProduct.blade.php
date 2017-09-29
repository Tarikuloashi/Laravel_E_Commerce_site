@extends('admin.master')
@section('content')
<hr/>

<div class="row">
	<div class="col-lg-12">
		<h2 class="text-center text-success">{{Session::get('message')}}</h2>
		<hr/>
		<div class="well">
			{!!Form::open(['url'=>'product/update','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','name'=>'editProductForm'])!!}
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
				<div class="col-sm-10">
					<input type="text" value="{{$productById->productName}}" class="form-control" name="productName">
					<input type="hidden" value="{{$productById->id}}" class="form-control" name="productid">

					<span class="text-danger">{{$errors->has('productName')?$errors->first('productName'):''}}</span>
				</div>
			</div>

			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Category Name</label>
				<div class="col-sm-10">
					<select class="form-control" name="categoryid">
						<option>Select Category Name</option>
						@foreach($categories as $category)
						<option value="{{$category->id}}">{{$category->categoryName}}</option>
						@endforeach
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Menufacturer Name</label>
				<div class="col-sm-10">
					<select class="form-control" name="menufacturerid">
						<option>Select Menufacturer Name</option>
						@foreach($menufacturers as $menufacturer)
						<option value="{{$menufacturer->id}}">{{$menufacturer->menufacturerName}}</option>
						@endforeach
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Product Price</label>
				<div class="col-sm-10">
					<input type="number" value="{{$productById->productPrice}}" class="form-control" name="productPrice">
					<span class="text-danger">{{$errors->has('productPrice')?$errors->first('productPrice'):''}}</span>
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Product Quentity</label>
				<div class="col-sm-10">
					<input type="number" value="{{$productById->productQuantity}}" class="form-control" name="productQuentity">
					<span class="text-danger">{{$errors->has('productQuentity')?$errors->first('productQuentity'):''}}</span>
				</div>
			</div>


			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Product Short Description</label>
				<div class="col-sm-10">
					<textarea class="form-control"  name="productShortDescription" rows="4">{{$productById->productShortDescription}}</textarea>
					<span class="text-danger">{{$errors->has('productShortDescription')?$errors->first('productShortDescription'):''}}</span>
				</div>
			</div>

			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Product Long Description</label>
				<div class="col-sm-10">
					<textarea class="form-control"  name="productLongDescription" rows="8">{{$productById->productLongDescription}}</textarea>
					<span class="text-danger">{{$errors->has('productLongDescription')?$errors->first('productLongDescription'):''}}</span>
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Product Image</label>
				<div class="col-sm-10">
					<input type="file"  name="productImage" accept="image/*">
					<img src="{{asset($productById->productImage)}}" alt="" height="200" width="200">
					<span class="text-danger">{{$errors->has('productImage')?$errors->first('productImage'):''}}</span>
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
					<button type="submit" name="btn" class="btn btn-success btn-block"> Update Product</button>
				</div>
			</div>
			{!!Form::close()!!}
		</div>
	</div>
	<script>
		document.forms['editProductForm'].elements['publicationStatus'].value={{$productById->publicationStatus }}
		document.forms['editProductForm'].elements['categoryid'].value={{$productById->categoryid }}
		document.forms['editProductForm'].elements['menufacturerid'].value={{$productById->manufacturerid }}

	</script>
	

@endsection
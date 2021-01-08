@extends('layouts.admin.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Products
        <small>Add Product</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Products</li>
        <li class="active">Add</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	<form method="post" action="" class="form form-horizontal">
    		@csrf
    		<div class="row form-group">
    			<div class="col-md-3">
    				<label> Name</label>
    			</div>
    			<div class="col-md-9">
    				<input type="text" name="product_name" class="form-control" placeholder="Product Name">
    			</div>
    		</div>
    		<div class="row form-group">
    			<div class="col-md-3">
    				<label> Type</label>
    			</div>
    			<div class="col-md-9">
    				<select name="product_type" class="form-control">
    					<option selected disabled>Select type</option>
    					<option value="1">Banh man</option>
    					<option value="2">Banh ngot</option>
    					<option value="3">Banh trai cay </option>
    					<option value="4">Banh kem</option>
    					<option value="5">Banh Pizza</option>
    					<option value="6">Banh su kem </option>
    				</select> 
    			</div>
    		</div>
    		<div class="row form-group">
    			<div class="col-md-3">
    				<label> Description</label>
    			</div>
    			<div class="col-md-9">
    			<textarea name="product_desc" class="form-control">
    			</textarea>
    			</div>
    		</div>
    		<div class="row form-group">
    			<div class="col-md-3">
    				<label> Unit price</label>
    			</div>
    			<div class="col-md-3">
    				<input type="number" name="product_promotion_price" class="form-control" placeholder="Promotion price" min="0" step="10">
    			</div>
    		</div>
    		<div class="row form-group">
    			<div class="col-md-3">
    				<label>Is new</label>
    			</div>
    			<div class="col-md-3">
    				<input type="radio" name="product_new" value="1"><label>Yes</label>
    			</div>
    			<div class="col-md-3">
    				<input type="radio" name="product_new" value="0"><label>No</label>
    			</div>
    		</div>
    		<div class="row form-group">
    			<div class="col-md-3">
    				<label>Image</label>
    			</div>
    			<div class="col-md-9">
    				<input type="file" name="product_image" class="form-control">
    			</div>
    		</div>
    		<div class="row form-group">
    			<div class="col-md-12 text-right">
    				<button type="reset" class="btn btn-default">Reset</button>
   
    				<button type="submit" class="btn btn-primary">Submit</button>
    			</div>
    		</div>
    	</form>
    </section>
</div>
@endsection
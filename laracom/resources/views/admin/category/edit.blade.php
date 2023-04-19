@extends ('layouts.admin')


@section('content')

<div class="row">
    <div class="col-md-12">
		<div class="card">
        <div class="card-header">
		
		<h4>Edit Category
		<a href="{{url ('admin/category')}}" class="btn btn-primary btn-sm float-end">Back </a>
		
		
		</h4>
					
</div>	
<div class="card-body">

<form action="{{url('admin/category')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="row">
<div class="col-md-6 mb-3">

<label>Name</label>
    <input type="text" name="name" value="{{$category->name}}" class="form-control" />
</div>

<div class="col-md-6 mb-3">

<label>Slug</label>
    <input type="text" name="slug" value="{{$category->slug}}" class="form-control" />
</div>

<div class="col-md-12 mb-3">

<label>Description</label>
    <textarea name="description" class="form-control" > {{$category->description}} </textarea>
</div>

<div class="col-md-6 mb-3">

<label>Image</label>
    <input type="file" name="image" accept="image/*" />
    <img src="{{ asset('/uploads/category/' .$category->image)}}" width-"60px" height="60px" />
</div>

<div class="col-md-6 mb-3">

<label>Status</label><br>
    <input type="checkbox" value="{{$category->status}}" name="status" />
</div>



<div class="col-md-12 mb-3">
<h4>SEO Tags</h4>
</div>
<div class="col-md-12 mb-3">

<label>Meta Title</label>
    <input type="text" name="meta_title" value="{{$category->meta_title}}" class="form-control" />
</div>

<div class="col-md-12 mb-3">

<label>Meta Keyword</label>
    <textarea name="meta_keyword" class="form-control"> {{$category->meta_keyword}}</textarea>
</div>

<div class="col-md-12 mb-3">

<label>Meta Description</label>
    <textarea name="meta_description"  class="form-control"> {{$category->meta_description}}</textarea>
</div>

<div class="col-md-12 mb-3">
<a href="" >
<button type="submit" class= "btn btn-primary float-end">Save</button>

 </a>

</div>
</div>
</form>
</div>
			
			

</div>
</div>
</div>

@endsection
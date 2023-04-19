@extends ('layouts.admin')


@section('content')

<div class="row">
    <div class="col-md-12">
		<div class="card">
        <div class="card-header">
		
		<h4>Category
		<a href={{url ('admin/category')}} class="btn btn-success btn-sm float-end">Back </a>
		
		
		</h4>
					
</div>	
<div class="card-body">

<form action={{url('admin/category')}} method="post" enctype="multipart/form-data">
@csrf
<div class="row">
<div class="col-md-6 mb-3">

<label>Name</label>
    <input type="text" name="name" class="form-control" />
</div>

<div class="col-md-6 mb-3">

<label>Slug</label>
    <input type="text" name="slug" class="form-control" />
</div>

<div class="col-md-12 mb-3">

<label>Description</label>
    <textarea name="description" class="form-control" > </textarea>
</div>

<div class="col-md-6 mb-3">

<label>Image</label>
    <input type="file" name="image" accept="image/*" />
</div>

<div class="col-md-6 mb-3">

<label>Status</label><br>
    <input type="checkbox" name="status" />
</div>



<div class="col-md-12 mb-3">
<h4>SEO Tags</h4>
</div>
<div class="col-md-12 mb-3">

<label>Meta Title</label>
    <input type="text" name="meta_title" class="form-control" />
</div>

<div class="col-md-12 mb-3">

<label>Meta Keyword</label>
    <textarea name="meta_keyword" class="form-control"> </textarea>
</div>

<div class="col-md-12 mb-3">

<label>Meta Description</label>
    <textarea name="meta_description" class="form-control"> </textarea>
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
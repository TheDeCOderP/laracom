<div class="row">
    <div class="col-md-12">
        @if(session('message'))
         <div class="alert alert-success">{{session('message')}}</div>
        @endif
		<div class="card">
        <div class="card-header">
		
		<h4>Category
		<a href={{url ('admin/category/create')}} class="btn btn-success btn-sm float-end">Add Category </a>
		
		
		</h4>
			
			
		<div class="card-body">	
        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->status == '1' ? 'Hidden':'Visible'}}</td>
      <td>
        <a href="{{url('admin/category/'.$category->id.'/edit') }}" class="btn btn-success"> Edit </a>
        <a href="{{url('admin/category/'.$category->id.'/delete') }}" class="btn btn-danger"> Delete </a>
      </td>
      
      
    </tr>
    @endforeach

  </tbody>
</table>
		<div>
            {{$categories->links()}}
        </div>	
</div>
</div>
</div>
</div>
</div>
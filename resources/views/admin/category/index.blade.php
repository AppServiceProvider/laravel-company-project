<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="py-12">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="card"> @if(session('success')) <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div> @endif <div class="card-header"> All Category </div>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">SL No</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">User</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- @php($i = 1) --> @foreach($categories as $category) <tr>
                    {{-- <th scope="row"> {{ $categories->firstItem()+$loop->index  }} </th> --}} 
                    <td> {{ $category->category_name }} </td>
                    {{-- <td> {{ $category->user->name }} </td> --}} 
                    <td> 
                      @if($category->created_at == NULL) 
                      <span class="text-danger"> No Date Set</span> 
                      @else {{ Carbon\Carbon::parse($category->created_at)->diffForHumans() }} @endif </td>
                    <td>

                      {{-- <a href="{{ url('category/edit/'.$category->id) }}" class="btn btn-info">Edit</a> --}}
                      <a href="{{route('categoryEdit',['id'=>$category->id])}}" class="btn btn-danger">Edit</a>

                      {{-- <a href="{{ url('softdelete/category/'.$category->id) }}" class="btn btn-danger">Delete</a> --}} 
                      <a href="{{route('softdelete',['id'=>$category->id])}}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr> @endforeach
                </tbody>
              </table>
              {{ $categories->links() }}
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header"> Add Category </div>
              <div class="card-body">
                <form action="{{ route('store.category') }}" method="POST"> @csrf <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> @error('category_name') <span class="text-danger"> {{ $message }}</span> @enderror
                  </div>
                  <button type="submit" class="btn btn-primary">Add Category</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Trash Part -->
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">Trash List </div>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">SL No</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">User</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- @php($i = 1) --> @foreach($trachCat as $category) <tr>
                    <th scope="row"> {{ $categories->firstItem()+$loop->index  }} </th>
                    <td> {{ $category->category_name }} </td>
                    {{-- <td> {{ $category->user->name }} </td> --}} <td> @if($category->created_at == NULL) <span class="text-danger"> No Date Set</span> @else {{ Carbon\Carbon::parse($category->created_at)->diffForHumans() }} @endif </td>
                    <td>
                      {{-- <a href="{{ url('category/restore/'.$category->id) }}" class="btn btn-info">Restore</a> --}}
                      <a href="{{route('categoryRestore',['id'=>$category->id])}}" class="btn btn-info">Restore</a>

                      <a href="{{route('permanentDelete',['id'=>$category->id])}}" class="btn btn-danger">P Delete</a>
                    </td>
                  </tr> @endforeach
                </tbody>
              </table>
              {{-- {{ $trachCat->links() }} --}}
            </div>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
      <!-- End Trush -->
    </div>
  </body>
</html>
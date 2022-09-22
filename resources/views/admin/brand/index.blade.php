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
            <div class="card">
              <div class="card-header"> All Brand </div>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">SL No</th>
                    <th scope="col">Brand Name</th>
                    <th scope="col">Brand Image</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                 @php($i = 1) 
                  @foreach($brand as $value) <tr>
                    {{-- <th scope="row"> {{ $value->firstItem()+$loop->index  }} </th> --}}
                    {{-- <th scope="row"> {{ $value->id  }} </th> --}}

                    <th scope="row"> {{$i++}} </th>

                    <td> {{ $value->brand_name }} </td>
                    <td>
                      <img src="{{ asset($value->brand_image) }}" style="height:40px; width:70px;">
                    </td>
                    <td> @if($value->created_at == NULL) <span class="text-danger"> No Date Set</span> @else {{ Carbon\Carbon::parse($value->created_at)->diffForHumans() }} @endif </td>
                    <td>
                      <a href="{{ url('brand/edit/'.$value->id) }}" class="btn btn-info">Edit</a>
                      <a href="{{ url('brand/delete/'.$value->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                    </td>
                  </tr> @endforeach
                </tbody>
              </table>
              {{ $brand->links() }}
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header"> Add Brand </div>
              <div class="card-body">
                <form action="{{ route('store.brand') }}" method="POST" enctype="multipart/form-data"> 
                @csrf <div class="form-group">
                  <label for="exampleInputEmail1">Brand Name</label>
                  <input type="text" name="brand_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> @error('brand_name') <span class="text-danger"> {{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Brand Image</label>
                  <input type="file" name="brand_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> @error('brand_image') <span class="text-danger"> {{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Brand</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>
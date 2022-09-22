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
            <div class="card-group"> 
                  @foreach($images as $multi) 
                  <div class="col-md-4 mt-5">
                    <div class="card">
                      <img src="{{ asset($multi->image) }}" alt="">
                    </div>
                  </div> 
                  @endforeach 
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header"> Multi Image </div>
              <div class="card-body">
                <form action="{{ route('store.image') }}" method="POST" enctype="multipart/form-data"> @csrf <div class="form-group">
                    <label for="exampleInputEmail1">Multi Image</label>
                    <input type="file" name="image[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" multiple=""> @error('image') <span class="text-danger"> {{ $message }}</span> @enderror
                  </div>
                  <button type="submit" class="btn btn-primary">Add Image</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
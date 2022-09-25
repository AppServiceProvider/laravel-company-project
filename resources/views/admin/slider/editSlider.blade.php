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
     <div class="container">
          <div class="row">
               <div class="col-lg-12">
                    <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                    <h2>Create Slider</h2>
                    </div>
                    <div class="card-body">
                    <form action="{{ url('slider/update/'.$sliders->id)  }}" method="POST" enctype="multipart/form-data"> 
                        @csrf 
                        <div class="form-group">
                         <label for="exampleFormControlInput1">Slider Title </label>
                         <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Slider Title"  value="{{ $sliders->title }}">
                         </div>
                         <div class="form-group">
                         <label for="exampleFormControlTextarea1">Slider Description</label>
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ $sliders->description }}"</textarea>
                         </div>
                         <div class="form-group">
                         <label for="exampleFormControlFile1">Slider Image</label>
                         <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                         </div>
                         <div class="form-group">
                              <img src="{{ asset($sliders->image) }}" style="width:400px; height:200px; object-fit: cover;">
                         </div>
                         <div class="form-footer pt-4 mt-4 border-top">
                         <button type="submit" class="btn btn-primary btn-default">Submit</button>
                         </div>
                    </form>
                    </div>
                    </div>
               </div>
          </div>
     </div>
</body>
</html>
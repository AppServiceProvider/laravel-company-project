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

    

    <div>

    
      <div class="py-12"> 
     <div class="container">
      <div class="row">
    
    
    
    
      <div class="col-md-8">
       <div class="card">
            <div class="card-header"> Edit Category </div>
            <div class="card-body">
            
            <form action="{{ url('category/update/'.$categories->id)  }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Update Category Name</label>
                    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $categories->category_name }}">
                          @error('category_name')
                              <span class="text-danger"> {{ $message }}</span>
                          @enderror
                  </div>
                  <button type="submit" class="btn btn-primary">Update Category</button>
             </form>

    
         </div>
    
      </div>
    </div> 
    
    
    
      </div>
    </div> 
    
      </div>
    </div>

  </body>
</html>













{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           
           Edit Category<b>  </b>
          

        </h2>
    </x-slot>

    <div class="py-12"> 
   <div class="container">
    <div class="row">

 


    <div class="col-md-8">
     <div class="card">
          <div class="card-header"> Edit Category </div>
          <div class="card-body">
          
         
         
          <form action="{{ url('category/update/'.$categories->id)  }}" method="POST">
          @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Update Category Name</label>
    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $categories->category_name }}">

          @error('category_name')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
     
  <button type="submit" class="btn btn-primary">Update Category</button>
</form>

       </div>

    </div>
  </div> 
 


    </div>
  </div> 

    </div>
</x-app-layout> --}}

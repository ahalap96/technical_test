<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<br><br>
    <h2 align="center">Edit Products</h2>
      <div class="container" data-aos="fade-up" >
        <div class="row mt-5">
          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{route('editproduct')}}" method="post" >
                @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="hidden" name="id" value="{{$data->id}}">
                  <input type="text" name="pname" class="form-control" id="name" value="{{$data->pname}}" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="price" value="{{$data->price}}"  required>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-12 form-group">
                <img src="{{asset('storage/image/'.$data->image)}}" class="img-fluid" alt="">
                  <input type="file" name="image" class="form-control"  >
                </div>
              </div><br>
              <div class="text-center"><button class="btn btn-primary" type="submit" >Add</button></div>
            </form>

          </div>

        </div>

      </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

  

  
  

 
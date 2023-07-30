
@extends('product')
  @section('addproduct')
  <br><br>
    <h2 align="center">Add Products</h2>
      <div class="container" >
        <div class="row mt-5">
          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{route('saveproduct')}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="pname" class="form-control" id="name" placeholder="product Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="price" placeholder="price" required>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="file" name="image" class="form-control" id="image" placeholder="image" required>
                </div>
              </div><br>
              <div class="text-center"><button class="btn btn-primary" type="submit" >Add</button></div>
            </form>

          </div>

        </div>

      </div>
@endsection
  
  

 
@extends('product')
@section('viewproduct')
<br>
<div>
    <h2 align="center">View products</h2>
</div>
<div class="container" >
        <div class="row" >
      @foreach($product as $num)
          <div class="col-lg-4 col-md-6 d-flex ">
            <div class="member">
              <img src="{{asset('storage/image/'.$num->image)}}" class="img-fluid" alt="">
              <div class="member-content">
                <h2>{{$num->pname}}</h2>
                <h4>{{$num->price}}</h4>
                <h3>Stock status:
                @if(($num->status)=='0')
                 <a class="btn btn-primary" href="">Available</a>
                 @else
                 <a class="btn btn-primary" href="">out of Stock</a>
                 @endif
</h3>
                <div>
                </div>
              </div>
              <a href="{{route('editview',encrypt($num->id))}}" class="btn btn-primary">Edit</a>
              <a href="{{route('deleteproduct',encrypt($num->id))}}" class="btn btn-primary">delete</a>
            </div>
          </div>
@endforeach
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid bg-dark">
    <a class="navbar-brand" href=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" href="{{route('logout')}}">logout</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<br>
<div>
    <h2 align="center"><u>Users List</u></h2>
</div><br><br>
<div class="container" >
        <div class="row" >
      @foreach($user as $num)
          <div class="col-lg-4 col-md-6 d-flex ">
            <div class="member">
              <div class="member-content">
                <img src="https://static.vecteezy.com/system/resources/previews/008/442/086/original/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" width="30%" height="30%">
                <h2>Name:{{$num->name}}</h2>
                <h4>Email:{{$num->email}}</h4>
                <h3>Mobile:{{$num->mobile}}</h3>
                <h3>Role:{{$num->role}}</h3>
                <div>
                </div>
              </div>
              <a href="{{route('deleteuser',encrypt($num->id))}}" class="btn btn-primary">delete</a>
            </div>
          </div>
          @endforeach

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
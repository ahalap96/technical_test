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
<div class="container" >
<div class="row justify-content-center">
<div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
       
        <br><br><br><br><br>
        <div class="card mb-1">
       
<div class="card-body bg-secondary">

        <form class="row g-3 " method="POST" action="{{route('log')}}" >
@csrf
<div class="col-12">
<label  class="form-label text-white">Username</label>
<input type="text" name="username" class="form-control" required>
<div class="invalid-feedback">Please enter your password!</div>
</div>

<div class="col-12">
<label  class="form-label text-white">Password</label>
<input type="password" name="password" class="form-control" required>
<div class="invalid-feedback">Please enter your password!</div>
</div>


<div class="col-12">
<button class="btn btn-primary w-100" type="submit" name="login">Login</button>
</div>
<p class="small mb-0 text-white">Don't have account?

    <a href="{{route('userregister')}}">create an account</a></p>

</form>
</div>
</div>
</div>
</div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
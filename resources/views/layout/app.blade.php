<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href= "{{asset('css/style.css')}}" />
    <title>Demo</title>
  </head>
  <body>
    <nav class="navbar navbar-expand bg-warning">
  <div class="container-fluid">
  <p class="text-dark text-uppercase " style="font-weight:bold; font-size:25px; margin-bottom:7px; margin-top:3px;">Friend's Mobiles </p>
    
</div>
</nav>
<div class="container mt-3">
<div class="row">
  @if($message=Session::get('success'))
  <div class="alert alert-success alert-dismissible fade show">
<strong> Success </strong>{{$message}}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" > </button>   
</div>
@endif
    @yield("main")
</div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
@extends("layout.app")
@section("main")

<div class="row">
                 <h5><i class="bi bi-plus-square-fill"></i> product Details</h5><hr/>
                 <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">View product</a></li>
                    </ol>
                 </nav>

<div class="card">
    <img src="/products/{{$product->image}}" alt="{{$product->name}}" class="card-img-top" />

<div class="card-body">
    <h5 class="card-title fw-bold">{{$product->name}}</h5>
<p class="card-text text-secondary">{{$product->description}} </p>
<p class="fw-bold">selling price<small class="text-success">   Rs.{{$product->price}}</small></p>
<p class="fw-bold">M.R.P<small class="text-danger text-decoration-line-through" >   Rs.{{$product->mrp}}</small></p>


</div>
  </div>

@endsection
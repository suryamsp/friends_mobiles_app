@extends("layout.app")
@section("main")

<div class="row">
    <div class="d-flex justify-content-between">
      <h5><i class="bi bi-journal-richtext"></i> Product details</h5>
      <a href="products/create" class="btn btn-primary"><i class="bi bi-plus-circle"></i> New product</a>
    </div>   
    <div class="col-md-12 table-responsive mt-3">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>S.NO</th>
          <th>Image</th>
          <th>Product name</th>
          <th>M.R.P</th>
          <th>Selling price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($products as $product)
      @php
        $index=($products->currentPage()-1)* $products->perPage()+$loop->iteration;
     @endphp
        <tr>
          <td>{{$index}}</td>
          <td><img src="products/{{$product->image}}" style="width: 100px; height: 75px; object-fit: contain;" alt="product" /></td>
          <td><a href="products/{{$product->id}}/show">{{$product->name}}</a></td>
          <td>Rs.{{$product->mrp}}</td>
          <td>Rs.{{$product->price}}</td>
          <td>
            <a href="products/{{$product->id}}/edit" class="btn btn-dark btn-sm"><i class="bi bi-pencil-square"></i></a>
            <a href="products/{{$product->id}}/delete" onclick="return  confirm('Are you sure you want to deleted.?')" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></a>
        </td>

        </tr>
        @endforeach
      </tbody>
    </table>
   <div class="page">
   {{$products->links()}}
   </div >
    </div>
  </div>

@endsection
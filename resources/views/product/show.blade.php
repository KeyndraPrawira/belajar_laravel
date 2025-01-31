@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Product List</div>

                <div class="card-body">
                <form action="{{route('product.show', $product->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mt-3">
                        <label for="nama">Product Name</label>
                        <input disabled type="text" value="{{$product->name_products}}" class="form-control" id="nama" name="name_product" >
                </div>
                <div class="form-group mt-3">
                        <label for="nama">Brand</label>
                        <input disabled type="text" value="{{$product->merk}}" class="form-control" id="nama" name="merk" >
                </div>
                <div class="form-group mt-3">
                        <label for="nama">Price</label>
                        <input disabled type="text" value="{{$product->price}}" class="form-control" id="nama" name="price" >
                </div>
                <div class="form-group mt-3">
                        <label for="nama">Stock</label>
                        <input disabled type="text" value="{{$product->stock}}" class="form-control" id="nama" name="stock" >
                </div>
 
 
  
                    <a href="{{route ('product.index')}}" type="submit" class="btn btn-primary mt-3" name="tambah">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
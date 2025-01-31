@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Product List</div>

                <div class="card-body">
                <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-3">
                        <label for="nama">Product Name</label>
                        <input type="text" class="form-control" id="nama" name="name_product" >
                </div>
                <div class="form-group mt-3">
                        <label for="nama">Brand</label>
                        <input type="text" class="form-control" id="nama" name="merk" >
                </div>
                <div class="form-group mt-3">
                        <label for="nama">Price</label>
                        <input type="text" class="form-control" id="nama" name="price" >
                </div>
                <div class="form-group mt-3">
                        <label for="nama">Stock</label>
                        <input type="text" class="form-control" id="nama" name="stock" >
                </div>
 
 
  
                    <button type="submit" class="btn btn-primary mt-3" name="tambah">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
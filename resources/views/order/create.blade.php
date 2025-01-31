@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Order List</div>

                <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('order.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                            <label for="pengguna">Product name</label>

                            <select name="id_product" class="form-control" id="pengguna">
                                <option disabled selected>Choose Product</option>
                             @foreach ($product as $data)
                             <option value="{{$data->id}}">{{$data->name_products}}</option>
                             @endforeach
                            </select>
                    </div>

                 <div class="form-group mt-3">
                        <label for="nama">Quantity</label>
                        <input type="number" class="form-control" id="nama" name="quantity" >
                </div>
                <div class="form-group mt-3">
                        <label for="nama">Order Date</label>
                        <input type="date" class="form-control" id="nama" name="date" >
                </div>
                <div class="form-group">
                            <label for="pengguna">costumer name</label>

                            <select name="id_costumer" class="form-control" id="pengguna">
                                <option disabled selected>Choose costumer</option>
                             @foreach ($costumer as $data)
                             <option value="{{$data->id}}">{{$data->name_costumer}}</option>
                             @endforeach
                            </select>
                    </div>

 
  
                    <button type="submit" class="btn btn-primary mt-3" name="tambah">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
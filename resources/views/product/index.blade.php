@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Product List</div>
            
                <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        {{session('success')}};
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
 
                <a href="{{ route('product.create') }}" class="btn btn-primary">Daftar</a>
                <table class="table" width="100%">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Price</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach ($product as $data)
                        <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data->name_products}}</td>
                        <td>{{$data->merk}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->stock}}</td>
                        
                        <td><a href="{{route('product.edit', $data->id)}}" type="button" class="btn btn-success">edit</a></td>
                            <td><a href="{{route('product.show', $data->id)}}" type="button" class='btn btn-warning'>show</a></td>
                           <td><form action="{{route('product.destroy', $data->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

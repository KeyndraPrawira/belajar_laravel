@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Daftar Produk</div>

                <div class="card-body">
                <form action="{{route('produk.update', $produk->id)}}" method="post" enctype="multipart/form-data">
                @csrf     
                @method('PUT')
                <div class="form-group mt-3">
                        <label for="nama">Nama Produk</label>
                        <input disabled type="text" class="form-control" id="nama" name="nama_produk" value="{{$produk->nama_produk}}">
                    </div>
                    <div class="form-group mt-3">
                        <label for="nama">Harga</label>
                        <input disabled type="text" class="form-control" id="nama" name="harga" value="{{$produk->harga}}">
                    </div>
                    <div class="form-group mt-3">
                        <label for="nama">Stok</label>
                        <input disabled type="text" class="form-control" id="nama" name="stok" value="{{$produk->stok}}">
                    </div>
 
                    <div class="form-group">
                            <label for="pengguna">Pilih Kategori</label>

                            <select disabled name="id_kategori" class="form-control" id="pengguna">
                      
                             @foreach ($kategori as $data)
                             <option disabled value="{{$data->id}}" {{$data->id == $produk->id_kategori ? 'selected' : ''}}>{{$data->nama_kategori}}</option>
                             @endforeach
                            </select>
                    </div>
                    <img src="{{ asset('/images/produk/' . $produk->cover) }}" width="100">
                    <a href="{{route('produk.index')}}" class="btn btn-primary">kembali</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
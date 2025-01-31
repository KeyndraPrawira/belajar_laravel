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
                        <input type="text" class="form-control" id="nama" name="nama_produk" value="{{$produk->nama_produk}}">
                    </div>
                    <div class="form-group mt-3">
                        <label for="nama">Harga</label>
                        <input type="text" class="form-control" id="nama" name="harga" value="{{$produk->harga}}">
                    </div>
                    <div class="form-group mt-3">
                        <label for="nama">Stok</label>
                        <input type="text" class="form-control" id="nama" name="stok" value="{{$produk->stok}}">
                    </div>
 
                    <div class="form-group">
                            <label for="pengguna">Pilih Kategori</label>

                            <select name="id_kategori" class="form-control" id="pengguna">
                                <option disabled selected>Pilih Kategori</option>
                             @foreach ($kategori as $data)
                             <option value="{{$data->id}}" {{$data->id == $produk->id_kategori ? 'selected' : ''}}>{{$data->nama_kategori}}</option>
                             @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                            <label class="form-label">Cover</label>
                            <img src="{{ asset('/images/produk/' . $produk->cover) }}" width="100">
                            <input type="file" class="form-control" name="cover">
                        </div>


                    <button type="submit" class="btn btn-primary mt-3" name="tambah">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
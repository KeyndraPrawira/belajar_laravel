@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Daftar Produk</div>

                <div class="card-body">
                <form action="{{route('produk.store')}}" method="post" enctype="multipart/form-data">
                @csrf     
                   <div class="form-group mt-3">
                        <label for="nama">Nama Produk</label>
                        <input type="text" class="form-control" id="nama" name="nama_produk">
                    </div>
                    <div class="form-group mt-3">
                        <label for="nama">Harga</label>
                        <input type="number" class="form-control" id="nama" name="harga">
                    </div>
                    <div class="form-group mt-3">
                        <label for="nama">Stok</label>
                        <input type="number" class="form-control" id="nama" name="stok">
                    </div>
 
 
                    <div class="form-group">
                            <label for="pengguna">Kategori Produk</label>

                            <select name="id_kategori" class="form-control" id="pengguna">
                                <option disabled selected>Pilih Kategori</option>
                             @foreach ($kategori as $data)
                             <option value="{{$data->id}}">{{$data->nama_kategori}}</option>
                             @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="">Cover</label>
                        <input type="file" class="form-control" id="" name="cover">
                    </div>
  
                    <button type="submit" class="btn btn-primary mt-3" name="tambah">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
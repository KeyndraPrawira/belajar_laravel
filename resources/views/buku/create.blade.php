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
                <form action="{{route('buku.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-3">
                        <label for="nama">Nama Buku</label>
                        <input type="text" class="form-control" id="nama" name="nama_buku" >
                </div>
                <div class="form-group mt-3">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga">
                </div>
                <div class="form-group mt-3">
                        <label for="stok">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" >
                </div>               
                <div class="form-group mt-3">
                        <label for="cover">Cover</label>
                        <input type="file" class="form-control" id="cover" name="image" >
                </div>
  
                <div class="form-group mt-3">
                            <label for="">Penerbit</label>

                            <select name="id_penerbit" class="form-control" id="">
                                <option disabled selected>Pilih Penerbit</option>
                             @foreach ($penerbit as $data)
                             <option value="{{$data->id}}">{{$data->nama_penerbit}}</option>
                             @endforeach
                            </select>
                    </div>

                <div class="form-group mt-3">
                        <label for="date">Tanggal Terbit</label>
                        <input type="date" class="form-control" id="date" name="tanggal_terbit" >
                </div>
                <div class="form-group mt-3">
                            <label for="">Genre</label>

                            <select name="id_genre" class="form-control" id="">
                                <option disabled selected>Pilih Genre</option>
                             @foreach ($genre as $data)
                             <option value="{{$data->id}}">{{$data->genre}}</option>
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
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Edit Buku</div>

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
                <form action="{{route('buku.update', $buku->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mt-3">
                        <label for="nama">Nama Buku</label>
                        <input type="text" class="form-control" value="{{$buku->nama_buku}}" id="nama" name="nama_buku" >
                </div>
                <div class="form-group mt-3">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" value="{{$buku->harga}}" id="harga" name="harga">
                </div>
                <div class="form-group mt-3">
                        <label for="stok">Stok</label>
                        <input type="number" class="form-control" value="{{$buku->stok}}" id="stok" name="stok" >
                </div>               
                <div class="form-group mt-3">
                        <label for="cover">Cover</label>
                        <img src="{{ asset('/images/buku/' . $buku->image) }}" width="100">
                        <input type="file" class="form-control" id="cover" value="{{$buku->image}}" name="image" >
                </div>
  
                <div class="form-group mt-3">
                            <label for="">Penerbit</label>

                            <select name="id_penerbit" class="form-control" id="">
                             @foreach ($penerbit as $data)
                             <option value="{{$data->id}}" {{$data->id == $transaksi->id_buku ? 'selected' : ''}}>{{$data->nama_buku}}>{{$data->nama_penerbit}}</option>
                             @endforeach
                            </select>
                    </div>

                <div class="form-group mt-3">
                        <label for="date">Tanggal Terbit</label>
                        <input type="date" class="form-control" value="{{$buku->tanggal_terbit}}" id="date" name="tanggal_terbit" >
                </div>
                <div class="form-group mt-3">
                            <label for="">Genre</label>

                            <select name="id_genre" class="form-control" id="">
                             @foreach ($genre as $data)
                             <option value="{{$data->id}}" {{$data->id == $transaksi->id_buku ? 'selected' : ''}}>{{$data->nama_buku}}>{{$data->genre}}</option>
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
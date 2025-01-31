@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Data Buku</div>

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
                <form action="{{route('buku.show', $buku->id)}}" method="post" enctype="multipart/form-data">
                @csrf
             
                <div class="form-group mt-3">
                        <label for="nama">Nama Buku</label>
                        <input type="text" value="{{$buku->nama_buku}}"disabled class="form-control" id="nama" name="nama_buku" >
                </div>
                <div class="form-group mt-3">
                        <label for="harga">Harga</label>
                        <input type="number" value="{{$buku->harga}}"disabled class="form-control" id="harga" name="harga">
                </div>
                <div class="form-group mt-3">
                        <label for="stok">Stok</label>
                        <input type="number" value="{{$buku->stok}}" disabled class="form-control" id="stok" name="stok" >
                </div>               
                <div class="form-group mt-3">
                        <label for="cover">Cover</label>
                        <img src="{{ asset('/images/buku/' . $buku->image) }}" width="100">
                        <input disabled type="file" class="form-control" id="cover" name="image" >
                </div>
  
                <div class="form-group mt-3">
                            <label for="">Penerbit</label>

                            <select name="id_penerbit" class="form-control" disabled id="">
                             @foreach ($penerbit as $data)
                             <option value="{{$data->id}}">{{$data->nama_penerbit}}</option>
                             @endforeach
                            </select>
                    </div>

                <div class="form-group mt-3">
                        <label for="date">Tanggal Terbit</label>
                        <input type="date" disabled class="form-control"value="{{$buku->tanggal_terbit}}" id="date" name="tanggal_terbit" >
                </div>
                <div class="form-group mt-3">
                            <label for="">Genre</label>

                            <select name="id_genre" disabled class="form-control" id="">
                             @foreach ($genre as $data)
                             <option value="{{$data->id}}">{{$data->genre}}</option>
                             @endforeach
                            </select>
                    </div>

 
                    <a href="{{route('buku.index')}}" class="btn btn-primary">kembali</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
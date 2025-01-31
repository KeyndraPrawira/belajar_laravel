@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Daftar Kategori</div>

                <div class="card-body">
                <form action="{{route('kategori.update',$kategori->id)}}" method="post" enctype="multipart/form-data">
                @csrf 
                @method('PUT')    
                <div class="form-group mt-3">
                        <label for="nama">Nama Kategori</label>
                        <input type="text" class="form-control"  id="nama" value="{{$kategori->nama_lengkap}}" name="nama">
                    </div>


                    <button type="submit" class="btn btn-success mt-3" name="tambah">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
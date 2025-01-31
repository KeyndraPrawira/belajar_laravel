@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Daftar PPDB</div>

                <div class="card-body">
                <form action="{{route('kategori.store')}}" method="post" enctype="multipart/form-data">
                @csrf     
                <div class="form-group mt-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama_kategori">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3" name="tambah">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
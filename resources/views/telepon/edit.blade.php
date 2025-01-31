@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Daftar PPDB</div>

                <div class="card-body">
                <form action="{{route('telepon.update', $telepon->id)}}" method="post" enctype="multipart/form-data">
                @csrf     
                @method('PUT')
                <div class="form-group mt-3">
                        <label for="nama">Nomor</label>
                        <input type="text" class="form-control" id="nama" name="nomor" value="{{$telepon->nomor}}">
                    </div>
                    <div class="form-group">
                            <label for="pengguna">Id Pengguna</label>

                            <select name="id_pengguna" class="form-control" id="pengguna">
                                <option disabled selected>Pilih Pengguna</option>
                             @foreach ($pengguna as $data)
                             <option value="{{$data->id}}" {{$data->id == $telepon->id_pengguna ? 'selected' : ''}}>{{$data->nama}}</option>
                             @endforeach
                            </select>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3" name="tambah">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
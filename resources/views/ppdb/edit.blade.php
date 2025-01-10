@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Daftar PPDB</div>

                <div class="card-body">
                <form action="{{route('ppdb.update',$ppdb->id)}}" method="post" enctype="multipart/form-data">
                @csrf 
                @method('PUT')    
                <div class="form-group mt-3">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control"  id="nama" value="{{$ppdb->nama_lengkap}}" name="nama_lengkap">
                    </div>
                    <div class="form-group mt-3">
                        <label for="jk">Jenis Kelamin</label><br>
                        <div class="mt-2"><input type="radio"  class="form-check-input me-1"  name="jenis_kelamin" value="Laki-laki">Laki-laki</div>
                        <div class="mt-2"><input type="radio"  class="form-check-input me-1"  name="jenis_kelamin" value="Perempuan">Perempuan</div>
                    </div>
                
                    <div class="form-group mt-3">
                            <label for="kelas">Agama</label>

                            <select name="agama" class="form-control" id="kelas">
                                <option    selected> {{$ppdb->agama}}</option>
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Kristen Protestan</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Kong Hu Cu">Kong Hu Cu</option>
                                <option value="Yahudi">Yahudi</option>
                                <option value="Atheis">Atheis</option>
                            </select>
                    </div>
                    <div class="form-floating mt-3">
                        <textarea class="form-control" value="" placeholder="" name="alamat" style="height: 100px" id="Alamat">{{$ppdb->alamat}}</textarea>
                        <label for="Alamat">Alamat</label>
                    </div>

                    <div class="form-group mt-3">
                        <label for="number">Telepon</label>
                        <input type="number" value="{{$ppdb->telepon}}"  class="form-control" id="number" name="telepon">
                    </div>
                    <div class="form-group mt-3">
                        <label for="asalsekolah">Asal Sekolah</label>
                        <input type="text" class="form-control"  value="{{$ppdb->asal_sekolah}}" id="asalsekolah" name="asal_sekolah">
                    </div>



                    <button type="submit" class="btn btn-success mt-3" name="tambah">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
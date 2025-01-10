@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Daftar PPDB</div>

                <div class="card-body">
                <form action="{{route('ppdb.store')}}" method="post" enctype="multipart/form-data">
                @csrf     
                <div class="form-group mt-3">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama_lengkap">
                    </div>
                    <div class="form-group mt-3">
                        <label for="jk">Jenis Kelamin</label><br>
                        <div class="mt-2"><input type="radio" class="form-check-input me-1" name="jenis_kelamin" value="Laki-laki">Laki-laki</div>
                        <div class="mt-2"><input type="radio" class="form-check-input me-1" name="jenis_kelamin" value="Perempuan">Perempuan</div>
                    </div>
                
                    <div class="form-group mt-3">
                            <label for="kelas">Agama</label>

                            <select name="agama" class="form-control" id="kelas">
                                <option disabled selected>Pilih Agama</option>
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
                        <textarea class="form-control" placeholder="" name="alamat" style="height: 100px" id="Alamat"></textarea>
                        <label for="Alamat">Alamat</label>
                    </div>

                    <div class="form-group mt-3">
                        <label for="number">Telepon</label>
                        <input type="number" class="form-control" id="number" name="telepon">
                    </div>
                    <div class="form-group mt-3">
                        <label for="asalsekolah">Asal Sekolah</label>
                        <input type="text" class="form-control" id="asalsekolah" name="asal_sekolah">
                    </div>



                    <button type="submit" class="btn btn-primary mt-3" name="tambah">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
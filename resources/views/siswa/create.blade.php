@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Siswa</div>

                <div class="card-body">
                <form action="{{route('siswa.store')}}" method="post" enctype="multipart/form-data">
                @csrf     
                <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="number" class="form-control" id="nis" name="nis">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label><br>
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki">Laki-laki
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">Perempuan
                    </div>
                    <div class="form-group">
                            <label for="kelas">Kelas</label>

                            <select name="kelas" class="form-control" id="kelas">
                                <option disabled selected>Pilih Kelas</option>
                                <option value="XI RPL 1">XI RPL 1</option>
                                <option value="XI RPL 2">XI RPL 2</option>
                                <option value="XI RPL 3">XI RPL 3</option>

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

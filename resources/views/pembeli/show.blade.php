@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">pembeli Data</div>

                <div class="card-body">
                <form action="{{route('pembeli.show', $pembeli->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mt-3">
                        <label for="nama">Nama Pembeli</label>
                        <input disabled type="text" value="{{$pembeli->nama_pembeli}}" class="form-control" id="nama" name="name_pembeli" >
                </div>
                <div class="form-check">
                    <input disabled class="form-check-input" type="radio" {{$pembeli->jenis_kelamin == 'Laki-laki' ? 'checked':''}} value="Laki-laki"  name="jenis_kelamin"  id="flexRadioDefault1">
                        <label class="form-check-label">
                            Laki-laki
                        </label>
                        </div>
                        <div class="form-check">
                        <input disabled {{$pembeli->jenis_kelamin == 'Perempuan' ? 'checked':''}} class="form-check-input" value="Perempuan"  type="radio" name="jenis_kelamin" id="flexRadioDefault2" >
                    <label class="form-check-label" for="flexRadioDefault2">
                        Perempuan
                    </label>
                    </div>
    
                <div class="form-group mt-3">
                        <label for="nama">Nomor Telepon</label>
                        <input disabled  {{$pembeli->jenis_kelamin == 'Laki-laki' ? 'checked':'' }}disabled type="text" value="{{$pembeli->telepon}}" class="form-control" id="nama" name="telepon" >
                </div>
 
 
  
                    <a href="{{route ('pembeli.index')}}" type="submit" class="btn btn-primary mt-3" name="tambah">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
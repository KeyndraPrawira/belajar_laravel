@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Tambah Data Pembeli</div>

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
           
                <form action="{{route('pembeli.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-3">
                        <label for="nama">pembeli Name</label>
                        <input type="text" class="form-control" id="nama" name="nama_pembeli" >
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" id="flexRadioDefault1">
                        <label class="form-check-label">
                            Laki-laki
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="flexRadioDefault2" >
                    <label class="form-check-label" for="flexRadioDefault2">
                        Perempuan
                    </label>
                    </div>
               <div class="form-group mt-3">
                        <label for="nama">Nomor Telepon</label>
                        <input type="number" class="form-control" id="nama" name="telepon" >
                </div>
 
 
  
                    <button type="submit" class="btn btn-primary mt-3" name="tambah">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
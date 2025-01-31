@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">pembeli List</div>

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
           
                <form action="{{route('pembeli.update', $pembeli->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mt-3">
                        <label for="nama">pembeli Name</label>
                        <input type="text" value="{{$pembeli->nama_pembeli}}" class="form-control" id="nama" name="nama_pembeli" >
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio"   name="jenis_kelamin"  id="flexRadioDefault1" {{$pembeli->jenis_kelamin == 'Male' ? 'checked':''}}>
                        <label class="form-check-label">
                            Male
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input"  type="radio" name="jenis_kelamin" value="Female" id="flexRadioDefault2"  {{$pembeli->jenis_kelamin == 'Female' ? 'checked':''}}>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Female
                    </label>
                    </div>
    
                <div class="form-group mt-3">
                        <label for="nama">Nomor Telepon</label>
                        <input type="text" value="{{$pembeli->telepon}}" class="form-control" id="nama" name="telepon" >
                </div>
 
 
  
                    <button type="submit" class="btn btn-primary mt-3" name="tambah">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
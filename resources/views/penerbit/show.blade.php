@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Data Penerbit</div>

                <div class="card-body">
                <form action="{{route('penerbit.show',$penerbit->id)}}" method="post" enctype="multipart/form-data">
                @csrf 
                @method('PUT')    
                <div class="form-group mt-3">
                        <label for="nama">Nama </label>
                        <input type="text" class="form-control" disabled id="nama" value="{{$penerbit->nama_penerbit}}" name="nama">
                    </div>



                    <a href="{{route('penerbit.index')}}" class="btn btn-primary">kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
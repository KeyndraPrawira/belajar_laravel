@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Edit Penerbit</div>

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
                <form action="{{route('penerbit.update',$penerbit->id)}}" method="post" enctype="multipart/form-data">
                @csrf 
                @method('PUT')    
                <div class="form-group mt-3">
                        <label for="nama">Nama penerbit</label>
                        <input type="text" class="form-control"  id="nama" value="{{$penerbit->nama_penerbit}}" name="nama">
                    </div>


                    <button type="submit" class="btn btn-success mt-3" name="tambah">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
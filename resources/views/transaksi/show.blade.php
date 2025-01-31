@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Edit Buku</div>

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
                <form action="{{route('transaksi.update', $transaksi->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mt-3">
                       
                       
                       <label for="">Nama Buku</label>

                       <select disabled name="id_buku" class="form-control" id="">
                        @foreach ($buku as $data)
                        <option disabled value="{{$data->id}}" {{$data->id == $transaksi->id_buku ? 'selected' : ''}}>{{$data->nama_buku}}</option>
                        @endforeach
                        </select>

              
           </div>
           <div class="form-group mt-3">
           <label for="pembeli">Nama Pembeli</label>
         
                       <select disabled name="id_pembeli" class="form-control" id="">

                        @foreach ($pembeli as $data)
                        <option disabled value="{{$data->id}}" {{$data->id == $transaksi->id_pembeli ? 'selected' : ''}}> {{$data->nama_pembeli}}</option>
                        @endforeach
                       </select>
           </div>
           <div class="form-group mt-3">
                   <label for="jumlah">Jumlah Buku</label>
               
                   <input type="number" disabled class="form-control" value="{{$transaksi->jumlah}}" id="" name="jumlah">
           </div>
 
           <div class="form-group mt-3">
                   <label for="tanggaltransaksi">Tanggal Transaksi</label>
                   <input type="date" class="form-control" disabled id="tanggaltransaksi" name="tanggal_transaksi" value="{{$transaksi->tanggal_transaksi}}" >
           </div>               
       


               <a href="{{route('transaksi.index')}}" class="btn btn-primary">Kembali</a>
               </form>
           </div>
            </div>
        </div>
    </div>
</div>


@endsection
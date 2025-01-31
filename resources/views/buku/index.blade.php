@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Daftar Buku</div>
            
                <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        {{session('success')}};
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
 
                <a href="{{ route('buku.create') }}" class="btn btn-primary">Daftar</a>
                <table class="table" width="100%">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pembeli</th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tanggal Terbit</th>
                        <th scope="col">Genre</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach ($buku as $data)
                        <tr>
                        <th scope="row">{{$no++}}</th>
                        
                        <td>{{$data->nama_buku}}</td>
                        <td>{{$data->harga}}</td>
                        <td>{{$data->stok}}</td>
                        <td>
                            <img src="{{asset('images/buku/' . $data->image)}}" alt="" width="100">
                        </td>

                        <td>{{$data->penerbit->nama_penerbit}}</td>
                        <td>{{$data->tanggal_terbit}}</td>
                        <td>{{$data->genre->genre}}</td>
   

                        
                        <td><a href="{{route('buku.edit', $data->id)}}" type="button" class="btn btn-success">edit</a></td>
                            <td><a href="{{route('buku.show', $data->id)}}" type="button" class='btn btn-warning'>show</a></td>
                           <td><form action="{{route('buku.destroy', $data->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

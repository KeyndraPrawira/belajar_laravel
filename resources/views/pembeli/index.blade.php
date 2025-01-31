@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">pembeli List</div>
            
                <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
 
                <a href="{{ route('pembeli.create') }}" class="btn btn-primary">Register</a>
                <table class="table" width="100%">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pembeli</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach ($pembeli as $data)
                        <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data->nama_pembeli}}</td>
                        <td>{{$data->jenis_kelamin}}</td>
                        <td>{{$data->telepon}}</td>
                        
                        <td><a href="{{route('pembeli.edit', $data->id)}}" type="button" class="btn btn-success">edit</a></td>
                            <td><a href="{{route('pembeli.show', $data->id)}}" type="button" class='btn btn-warning'>show</a></td>
                           <td><form action="{{route('pembeli.destroy', $data->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin ingin menghapus pembeli?')">Delete</button>
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

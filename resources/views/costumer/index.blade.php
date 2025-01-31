@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">costumer List</div>
            
                <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
 
                <a href="{{ route('costumer.create') }}" class="btn btn-primary">Register</a>
                <table class="table" width="100%">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Costumer Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach ($costumer as $data)
                        <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data->name_costumer}}</td>
                        <td>{{$data->gender}}</td>
                        <td>{{$data->contact}}</td>
                        
                        <td><a href="{{route('costumer.edit', $data->id)}}" type="button" class="btn btn-success">edit</a></td>
                            <td><a href="{{route('costumer.show', $data->id)}}" type="button" class='btn btn-warning'>show</a></td>
                           <td><form action="{{route('costumer.destroy', $data->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('U Sure?')">Delete</button>
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

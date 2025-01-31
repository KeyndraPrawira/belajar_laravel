@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">costumer List</div>

                <div class="card-body">
                <form action="{{route('costumer.update', $costumer->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mt-3">
                        <label for="nama">costumer Name</label>
                        <input type="text" value="{{$costumer->name_costumer}}" class="form-control" id="nama" name="name_costumer" >
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio"   name="gender" value="Male" id="flexRadioDefault1" {{$costumer->gender == 'Male' ? 'checked':''}}>
                        <label class="form-check-label">
                            Male
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input"  type="radio" name="gender" value="Female" id="flexRadioDefault2"  {{$costumer->gender == 'Female' ? 'checked':''}}>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Female
                    </label>
                    </div>
    
                <div class="form-group mt-3">
                        <label for="nama">Contact</label>
                        <input type="text" value="{{$costumer->contact}}" class="form-control" id="nama" name="contact" >
                </div>
 
 
  
                    <button type="submit" class="btn btn-primary mt-3" name="tambah">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
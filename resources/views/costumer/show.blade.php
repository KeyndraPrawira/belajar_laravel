@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Costumer Data</div>

                <div class="card-body">
                <form action="{{route('costumer.show', $costumer->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mt-3">
                        <label for="nama">costumer Name</label>
                        <input disabled type="text" value="{{$costumer->name_costumer}}" class="form-control" id="nama" name="name_costumer" >
                </div>
                <div class="form-check">
                    <input disabled class="form-check-input" type="radio" {{$costumer->gender == 'Male' ? 'checked':''}} value="Male"  name="gender"  id="flexRadioDefault1">
                        <label class="form-check-label">
                            Male
                        </label>
                        </div>
                        <div class="form-check">
                        <input disabled {{$costumer->gender == 'Female' ? 'checked':''}} class="form-check-input" value="Female"  type="radio" name="gender" id="flexRadioDefault2" >
                    <label class="form-check-label" for="flexRadioDefault2">
                        Female
                    </label>
                    </div>
    
                <div class="form-group mt-3">
                        <label for="nama">Contact</label>
                        <input disabled  {{$costumer->gender == 'Male' ? 'checked':'' }}disabled type="text" value="{{$costumer->contact}}" class="form-control" id="nama" name="contact" >
                </div>
 
 
  
                    <a href="{{route ('costumer.index')}}" type="submit" class="btn btn-primary mt-3" name="tambah">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
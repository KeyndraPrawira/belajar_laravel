@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Costumer List</div>

                <div class="card-body">
                <form action="{{route('costumer.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-3">
                        <label for="nama">Costumer Name</label>
                        <input type="text" class="form-control" id="nama" name="name_costumer" >
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="Male" id="flexRadioDefault1">
                        <label class="form-check-label">
                            Male
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Female" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Female
                    </label>
                    </div>
               <div class="form-group mt-3">
                        <label for="nama">Contact</label>
                        <input type="number" class="form-control" id="nama" name="contact" >
                </div>
 
 
  
                    <button type="submit" class="btn btn-primary mt-3" name="tambah">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
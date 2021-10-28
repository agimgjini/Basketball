@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="" method="POST">
            @csrf
            <p>Full name:</p>
            <input type="text" name="fullname" class="form-control" value="{{$players->fullname}}" required>
            <p style="color: red">@error('fullname') {{$message}} @enderror</p>
            <p>Age:</p>
            <input type="number" name="age" class="form-control" value="{{$players->age}}" required>
            <p style="color: red">@error('age') {{$message}} @enderror</p>
            <p>Height:</p>
            <input type="number" name="height" class="form-control" value="{{$players->height}}" required>
            <p style="color: red">@error('height') {{$message}} @enderror</p>
            <p>Weight:</p>
            <input type="number" name="weight" class="form-control" value="{{$players->weight}}" required>
            <p style="color: red">@error('weight') {{$message}} @enderror</p>
            <button class="btn btn-primary">Submit</button>
        </form>
        <a href="{{route('files.upload')}}"><button class="btn btn-primary">Upload a file</button></a>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="" method="POST">
            @csrf
            <p>Fullname:</p>
            <input type="text" name="fullname" class="form-control" value="{{Request::old('fullname')}}" required>
            <p style="color: red">@error('fullname') {{$message}} @enderror</p>
            <p>Age:</p>
            <input type="number" name="age" class="form-control" value="{{Request::old('age')}}" required>
            <p style="color: red">@error('age') {{$message}} @enderror</p>
            <p>Height:</p>
            <input type="number" name="height" class="form-control" value="{{Request::old('height')}}" required>
            <p style="color: red">@error('height') {{$message}} @enderror</p>
            <p>Weight:</p>
            <input type="number" name="weight" class="form-control" value="{{Request::old('weight')}}" required>
            <p style="color: red">@error('weight') {{$message}} @enderror</p>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

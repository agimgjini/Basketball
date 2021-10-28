@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('editstats')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$player_id}}">
            <p>Overall Points:</p>
            <input type="number" name="points" class="form-control" value="{{$stats->points}}" required>
            <p style="color: red">@error('points') {{$message}} @enderror</p>
            <p>Average points per game:</p>
            <input type="number" name="average_points" class="form-control" value="{{$stats->average_points}}" required>
            <p style="color: red">@error('average_points') {{$message}} @enderror</p>
            <p>Games:</p>
            <input type="number" name="games" class="form-control" value="{{$stats->games}}" required>
            <p style="color: red">@error('games') {{$message}} @enderror</p>
            <p>Duration:</p>
            <input type="number" name="duration" class="form-control" value="{{$stats->duration}}" required>
            <p style="color: red">@error('duration') {{$message}} @enderror</p>
            <div>
                <label for="active"><b>Active:</b></label>
                <input type="checkbox" id="active" name="active" value="{{$stats->active}}">
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

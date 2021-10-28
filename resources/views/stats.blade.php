@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Players Statistics</div>
                    <table id='t1' width='100%' border="1" style='border-collapse: collapse;'>
                        <thead>
                            <tr>
                                <td><b>ID</b></td>
                                <td><b>Player ID</b></td>
                                <td><b>Overall Points</b></td>
                                <td><b>Average Points Per Game</b></td>
                                <td><b>Games Played</b></td>
                                <td><b>Duration</b></td>
                                <td><b>Active</b></td>
                                <td><b></b></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stats as $stat)
                                <tr>
                                    <td>
                                        <p>{{$stat->id}}</p>
                                    </td>
                                    <td>
                                        <p>{{$stat->player_id}}</p>
                                    </td>
                                    <td>
                                        <p>{{$stat->points}}</p>
                                    </td>
                                    <td>
                                        <p>{{$stat->average_points}}</p>
                                    </td>
                                    <td>
                                        <p>{{$stat->games}}</p>
                                    </td>
                                    <td>
                                        <p>{{$stat->duration}}</p>
                                    </td>
                                    <td>
                                        <p>{{$stat->active}}</p>
                                    </td>
                                    <td>
                                        <a href="{{route('editstats', [$stat->id])}}"><button class="btn btn-primary">Edit</button></a>
                                        <a href="{{route('destroy', [$stat->id])}}"><button onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a href="{{route('addstats', ['stats' => $stats])}}"><button class="btn btn-primary">Add Stats</button></a>
            </div>
        </div>
    </div>
</div>
@endsection

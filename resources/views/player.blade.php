@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Players</div>
                    <table id='t1' width='100%' border="1" style='border-collapse: collapse;'>
                        <thead>
                            <tr>
                                <td><b>ID</b></td>
                                <td><b>Full Name</b></td>
                                <td><b>Age</b></td>
                                <td><b>Height</b></td>
                                <td><b>Weight</b></td>
                                <td><b></b></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($player as $players)
                                <tr>
                                    <td>
                                        <p>{{$players->id}}</p>
                                    </td>
                                    <td>
                                        <p>{{$players->fullname}}</p>
                                    </td>
                                    <td>
                                        <p>{{$players->age}}</p>
                                    </td>
                                    <td>
                                        <p>{{$players->height}}cm</p>
                                    </td>
                                    <td>
                                        <p>{{$players->weight}}kg</p>
                                    </td>
                                    <td>
                                        <a href="stats/{{$players->id}}"><button class="btn btn-primary">View</button></a>
                                        <a href="{{route('editplayer', [$players->id])}}"><button class="btn btn-primary">Edit</button></a>
                                        <a href="{{route('destroy', [$players->id])}}"><button onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a href="addplayer"><button class="btn btn-primary">Add Player</button></a>
            </div>
        </div>
    </div>
</div>
@endsection

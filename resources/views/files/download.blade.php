@extends('layouts.app')

@section('content')
    <div class="container">
        <table id='t1' width='100%' border="1" style='border-collapse: collapse;'>
            @foreach ($Files as $file)
                <tr>
                    <td>
                        <p> {{ $file->name }}: <a href="" download="{{ $file->file_path }}"> {{ $file->file_path }} </a> </p>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

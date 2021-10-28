@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <input type="file" name="file" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @include('files.download')
    </div>
@endsection

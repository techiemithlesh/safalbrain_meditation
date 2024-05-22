@extends('admin.layouts.master')

@section('title')
    <title>Admin - Update Mentor</title>
@endsection

@section('content')
    <div class="container">
        <h1>Update Mentor</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('admin.mentor.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="bg_color">Background Color</label>
                <input type="color" id="bg_color" name="bg_color" class="form-control" value="{{ $mentor->bg_color }}">
            </div>
            <div class="form-group">
                <label for="mentor_img">Mentor Image</label>
                <input type="file" id="mentor_img" name="mentor_img" class="form-control">
                @if ($mentor->mentor_img)
                    <img src="{{ asset($mentor->mentor_img) }}" alt="{{ $mentor->mentor_name }}" class="img-thumbnail mt-2"
                        width="150">
                @endif
            </div>
            <div class="form-group">
                <label for="main_heading">Main Heading</label>
                <input type="text" id="main_heading" name="main_heading" class="form-control"
                    value="{{ $mentor->main_heading }}">
            </div>
            <div class="form-group">
                <label for="mentor_name">Mentor Name</label>
                <input type="text" id="mentor_name" name="mentor_name" class="form-control"
                    value="{{ $mentor->mentor_name }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control">{{ $mentor->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Mentor</button>
        </form>
    </div>

    <script>
       ClassicEditor.create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection

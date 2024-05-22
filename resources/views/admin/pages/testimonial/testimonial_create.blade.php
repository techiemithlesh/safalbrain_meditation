@extends('admin.layouts.master')

@section('title')
    <title>Testimonial Create</title>
@endsection

@section('content')
    <div class="container-fluid">
        <h1>Create Testimonial</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="designation">Designation:</label>
                <input type="text" class="form-control" id="designation" name="designation"
                    value="{{ old('designation') }}" required>
            </div>
            <div class="form-group">
                <label for="feedback">Feedback:</label>
                <textarea class="form-control" id="feedback" name="feedback" rows="5" required>{{ old('feedback') }}</textarea>
            </div>
            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" class="form-control-file" id="photo" name="photo">
            </div>
            <div class="form-group">
    <label for="video_link">Video Link:</label>
    <input type="url" class="form-control" id="video_link" name="video_link" value="{{ old('video_link') }}">
</div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

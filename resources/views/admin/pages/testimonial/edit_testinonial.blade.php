@extends('admin.layouts.master')

@section('title', 'Edit Testimonial')

@section('content')
    <div class="container-fluid">
        <h1>Edit Testimonial</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $testimonial->name) }}" required>
            </div>
            <div class="form-group">
                <label for="designation">Designation:</label>
                <input type="text" class="form-control" id="designation" name="designation" value="{{ old('designation', $testimonial->designation) }}" required>
            </div>
            <div class="form-group">
                <label for="feedback">Feedback:</label>
                <textarea class="form-control" id="feedback" name="feedback" rows="5" required>{{ old('feedback', $testimonial->feedback) }}</textarea>
            </div>
            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" class="form-control-file" id="photo" name="photo">
            </div>
            <div class="form-group">
                <label for="photo">Video Link:</label>
                <input type="url" class="form-control-file" id="video_link" name="video_link" value="{{ old('designation', $testimonial->video_link) }}">
            </div>
            
            @if ($testimonial->photo)
                <div class="form-group">
                    <label>Current Photo:</label>
                    <img src="{{ asset($testimonial->photo) }}" alt="Current Photo" style="max-width: 200px;">
                </div>
            @endif
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

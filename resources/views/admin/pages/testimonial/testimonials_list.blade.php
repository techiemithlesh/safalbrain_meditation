@extends('admin.layouts.master')

@section('title', 'Testimonials')

@section('content')
    <div class="container-fluid">
        <h1>Testimonials</h1>
        <a href="{{ route('testimonials.create') }}" class="btn btn-primary mb-2">Add New Testimonial</a>

        @if ($testimonials->isEmpty())
            <p>No testimonials found.</p>
        @else
            <div class="row">
                @foreach ($testimonials as $testimonial)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $testimonial->name }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $testimonial->designation }}</h6>
                                <p class="card-text">{{ $testimonial->feedback }}</p>
                                <a href="{{$testimonial->video_link}}" target="_blank">{{$testimonial->video_link ?? 'NA'}}</a>
                                @if ($testimonial->photo)
                                    <img src="{{ asset($testimonial->photo) }}" class="img-fluid" alt="Testimonial Photo">
                                @else
                                    <img src="{{ asset('path/to/default/image.jpg') }}" class="img-fluid" alt="Default Image">
                                @endif
                                <div class="mt-3">
                                    <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-primary btn-sm mr-2">Edit</a>
                                    <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this testimonial?')">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection

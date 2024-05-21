@extends('admin.layouts.master')

@section('title')
    <title>Admin - Update Banner</title>
@endsection

@section('content')
    <div class="container">
        <h1>Update Banner</h1>

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


        <form action="{{ route('admin.banner1.update', $hero_banner->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="bg_color">Background Color</label>
                <input type="color" id="bg_color" name="bg_color" class="form-control"
                    value="{{ $hero_banner->bg_color ?? '' }}">
            </div>
            <div class="form-group">
                <label for="image_path">Image Icon</label>
                <input type="file" id="image_path" name="image_path" class="form-control"
                    value="{{ $hero_banner->image_path ?? '' }}">
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control"
                    value="{{ $hero_banner->title ?? '' }}">
            </div>
            <div class="form-group">
                <label for="subtitle">Subtitle</label>
                <input type="text" id="subtitle" name="subtitle" class="form-control"
                    value="{{ $hero_banner->subtitle ?? '' }}">
            </div>
            <div class="form-group">
                <label for="content">Box Color</label>
                <input type="color" id="container_box" name="container_color"
                    value="{{ $hero_banner->container_color ?? '' }}" class="form-control" />
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" class="form-control">{{ $hero_banner->content ?? '' }}</textarea>
            </div>
            <div class="form-group">
                <label for="sub_content">Sub Content</label>
                <input type="text" id="sub_content" name="sub_content" class="form-control"
                    value="{{ $hero_banner->sub_content ?? '' }}">
            </div>

            <div class="form-group">
                <label for="sub_content">Sub Content Text Color</label>
                <input type="color" id="sub_content_color" name="sub_content_color" class="form-control"
                    value="{{ $hero_banner->sub_content ?? '' }}">
            </div>

            <div class="form-group">
                <label for="hero_image_path">Hero Image</label>
                <input type="file" id="hero_image_path" name="hero_image_path" class="form-control"
                    value="{{ $hero_banner->hero_image_path ?? '' }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Banner</button>
        </form>
    </div>
@endsection

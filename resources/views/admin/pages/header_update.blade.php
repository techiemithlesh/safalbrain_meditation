@extends('admin.layouts.master')

@section('title')
    <title>Admin - Edit Header</title>
@endsection

@section('content')
    <div class="container">
        <h1>Edit Header</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.header.update') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="bg_color">Background Color</label>
                <div class="input-group">
                    <input type="color" id="bg_color" name="bg_color" class="form-control" value="{{ $header->bg_color }}">
                </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control">{{ $header->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="description_text_color">Description Text Color</label>
                <div class="input-group">
                    <input type="color" id="description_text_color" name="description_text_color" class="form-control" value="{{ $header->description_text_color }}">
                </div>
            </div>
            <div class="form-group">
                <label for="btn_background_color">Button Background Color</label>
                <div class="input-group">
                    <input type="color" id="btn_background_color" name="btn_background_color" class="form-control" value="{{ $header->btn_background_color }}">
                </div>
            </div>
            <div class="form-group">
                <label for="btn_text">Button Text</label>
                <input type="text" id="btn_text" name="btn_text" class="form-control" value="{{ $header->btn_text }}">
            </div>
            <div class="form-group">
                <label for="btn_text_color">Button Text Color</label>
                <div class="input-group">
                    <input type="color" id="btn_text_color" name="btn_text_color" class="form-control" value="{{ $header->btn_text_color }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update Header</button>
        </form>
    </div>
@endsection

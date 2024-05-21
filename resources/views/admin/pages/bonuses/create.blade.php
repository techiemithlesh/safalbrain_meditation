@extends('admin.layouts.master')

@section('title')
    <title>Admin - create Bonus</title>
@endsection

@section('content')
    <div class="container">
        <h1>Add New Bonus</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('bonuses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control">{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label for="img">Image Size (1000 X 1080)</label>
                <input type="file" id="img" name="img" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Add Bonus</button>
        </form>
    </div>
@endsection

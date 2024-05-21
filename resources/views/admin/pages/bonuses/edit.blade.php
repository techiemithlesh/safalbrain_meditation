@extends('admin.layouts.master')

@section('title')
    <title>Admin - update Bonus</title>
@endsection

@section('content')
    <div class="container">
        <h1>Edit Bonus</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('bonuses.update', $bonus->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $bonus->title }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control">{{ $bonus->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="img">Image Size (1000 X 1080)</label>
                <input type="file" id="img" name="img" class="form-control">
                @if ($bonus->img)
                    <img src="{{ asset($bonus->img) }}" alt="{{ $bonus->title }}" width="100">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update Bonus</button>
        </form>
    </div>
@endsection

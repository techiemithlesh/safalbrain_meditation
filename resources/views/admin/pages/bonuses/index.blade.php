@extends('admin.layouts.master')

@section('title')
    <title>Admin - ALL Bonus</title>
@endsection

@section('content')
    <div class="container">
        <h1>Bonuses</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('bonuses.create') }}" class="btn btn-primary">Add New Bonus</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bonuses as $bonus)
                    <tr>
                        <td>{{ $bonus->id }}</td>
                        <td><img src="{{ asset($bonus->img) }}" alt="{{ $bonus->title }}" width="100"></td>
                        <td>{{ $bonus->title }}</td>
                        <td>{{ $bonus->description }}</td>
                        <td>
                            <a href="{{ route('bonuses.edit', $bonus->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('bonuses.destroy', $bonus->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

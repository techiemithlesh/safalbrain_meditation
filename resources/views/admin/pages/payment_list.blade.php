@extends('admin.layouts.master')

@section('title')
    <title>Payment List</title>
@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mb-4">Payment List</h1>

        <div class="table-responsive">
            @if ($payments->isEmpty())
                <div class="alert alert-info" role="alert">
                    No payments available to show.
                </div>
            @else
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>S NO</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Price</th>
                            <th>Payment ID</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($payments as $index => $payment)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $payment->name }}</td>
                                <td>{{ $payment->email }}</td>
                                <td>{{ $payment->phone }}</td>
                                <td>{{ $payment->city }}</td>
                                <td>{{ $payment->price }}</td>
                                <td>{{ $payment->r_payment_id }}</td>
                                <td>
                                    <form action="{{ route('payments.destroy', $payment->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-end mt-3">
                    @if ($payments->previousPageUrl())
                        <a href="{{ $payments->previousPageUrl() }}" class="mx-2 btn btn-primary">&laquo; Previous</a>
                    @endif
                    @if ($payments->nextPageUrl())
                        <a href="{{ $payments->nextPageUrl() }}" class="mx-2 btn btn-primary">Next &raquo;</a>
                    @endif
                </div>
            @endif
        </div>
    </div>
@endsection

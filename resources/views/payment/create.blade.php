@extends('layouts.app')

@section('content')
    <h1>Create Payment</h1>

    <form method="POST" action="{{ route('payments.store') }}">
        @csrf

        <div class="form-group">
            <label for="user_id">User ID:</label>
            <input type="text" name="user_id" id="user_id" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="text" name="amount" id="amount" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="payment_method">Payment Method:</label>
            <input type="text" name="payment_method" id="payment_method" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Payment</button>
    </form>
@endsection

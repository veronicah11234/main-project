@extends('layouts.app')

@section('content')
    <h1>Edit Payment</h1>

    <form method="POST" action="{{ route('payments.update', $payment->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="user_id">User ID:</label>
            <input type="text" name="user_id" id="user_id" class="form-control" value="{{ $payment->user_id }}" required>
        </div>

        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="text" name="amount" id="amount" class="form-control" value="{{ $payment->amount }}" required>
        </div>

        <div class="form-group">
            <label for="payment_method">Payment Method:</label>
            <input type="text" name="payment_method" id="payment_method" class="form-control" value="{{ $payment->payment_method }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Payment</button>
    </form>
@endsection

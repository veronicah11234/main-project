@extends('layouts.app')

@section('content')
    <h1>Payment Details</h1>

    <table class="table">
        <tr>
            <th>ID:</th>
            <td>{{ $payment->id }}</td>
        </tr>
        <tr>
            <th>User ID:</th>
            <td>{{ $payment->user_id }}</td>
        </tr>
        <tr>
            <th>Amount:</th>
            <td>{{ $payment->amount }}</td>
        </tr>
        <tr>
            <th>Payment Method:</th>
            <td>{{ $payment->payment_method }}</td>
        </tr>
        <tr>
            <th>Date:</th>
            <td>{{ $payment->created_at }}</td>
        </tr>
    </table>
@endsection

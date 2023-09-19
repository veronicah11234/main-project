@extends('layouts.app') <!-- Assuming you have a layout file for your app -->

@section('content')
    <h1>Payment History</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Amount</th>
                <th>Payment Method</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payments as $payment)
                <tr>
                    <td>{{ $payment->id }}</td>
                    <td>{{ $payment->user_id }}</td>
                    <td>{{ $payment->amount }}</td>
                    <td>{{ $payment->payment_method }}</td>
                    <td>{{ $payment->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

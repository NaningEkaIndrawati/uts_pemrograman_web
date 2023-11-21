@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Order List</h1>

        @if(count($orders) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Flower ID</th>
                        <th>Customer Name</th>
                        <th>Customer Email</th>
                        <th>Message</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->flower_id }}</td>
                            <td>{{ $order->customer_name }}</td>
                            <td>{{ $order->customer_email }}</td>
                            <td>{{ $order->message }}</td>
                            <td>{{ $order->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No orders found</p>
        @endif
    </div>
@endsection

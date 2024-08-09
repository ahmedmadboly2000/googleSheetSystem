<!-- resources/views/orders.blade.php -->
{{-- @extends('layouts.app')

@section('content')
    @livewire('orders')
@endsection --}}
<!-- resources/views/orders/index.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Orders</h1>
<table>
    <thead>
        <tr>
            <th>Order ID</th>
            <th>Client Name</th>
            <th>Phone Number</th>
            <th>Product Code</th>
            <th>Final Price</th>
            <th>Quantity</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
        <tr>
            @foreach($row as $cell)
            <td>{{ $cell }}</td>
            @endforeach
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

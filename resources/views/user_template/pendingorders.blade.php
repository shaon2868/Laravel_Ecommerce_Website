@extends('user_template.layouts.user_profile_template')
@section('profilecontent')
pending orders
@if(session()->get('message'))
        <div class="alert alert-success">
            {{ session()->get('message')}}
        </div>
@endif

<table class="table">
    <tr>
    <th>Product Id</th>
    <th>Price</th>
    </tr>
@foreach ($pending_orders as $order)
    <tr>
        <td>
            {{$order->product_id}}
        </td>
        <td>
            {{$order->total_price}}
        </td>
    </tr>
@endforeach
</table>

@endsection
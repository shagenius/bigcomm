@extends('layouts.app')

@section('title', 'Customers')

@section('content')
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th># of Orders</th>
            </tr>
        </thead>
            <tbody>
                <?php
                        foreach ($customers as $customer) {?>
                    <tr>
                        <th>{{$customer->first_name}} {{$customer->last_name}}</th>
                        <th>{{\Bigcommerce\Api\Client::getOrdersCount(array('customer_id'=>$customer->id))}}</th>
                    </tr>
                
                <?php } ?>
            </tbody>
    </table>
@endsection

@extends('layout.dash')


@section('content')

<style>
    a{
        text-decoration: none!important;
    }
</style>
<div class="table-responsive  overflow-auto">


    <table id="mytable" class="table table-bordred table-striped">
        <h4>orders ({{ $orders->count() }})</h4>
        <div class="d-flex justify-content-between">
            <p><a class="btn btn-outline-success btn-sm" href="{{ route('order.create') }}">+ Create order</a></p>
            <p><input type="search" class="form-control form-control-sm border" placeholder="Search"></p>
        </div>
        <thead>

            <tr>
                <th><input type="checkbox" id="checkall"></th>
                <th>Manager</th>
                <th>Server</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td><input type="checkbox" class="checkthis"></td>
                <td>{{ $order->manager->first_name }} {{ $order->manager->last_name }}</td>
                <td>{{ $order->server->first_name }} {{ $order->server->last_name }}</td>
                <td>{{ $order->getTotal() }} MAD</td>
                <td>
                    <a href="{{ route('order.show', $order->id) }}" class="btn btn-primary btn-sm btn-xs"><i class="bi bi-eye"></i></a>
                    <a href="{{ route('order.delete', $order->id) }}" onclick="return confirm('Are you sur you want to delete order?')" class="btn btn-danger btn-sm btn-xs"> <i class="bi bi-trash"></i> </a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

    <div class="clearfix"></div>
    {{ $orders->links('vendor.pagination.bootstrap-5') }}

</div>
@endsection
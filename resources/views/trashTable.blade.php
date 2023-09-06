@extends('layouts.main')

@section('main-section')
    <div class="container">
        <a href="{{ route('customer.create') }}">

            <button class="btn btn-success d-inline-block m-2 float-right"> Add</button>
        </a>
        <a href="{{ url('/') }}/customers">

            <button class="btn btn-primary d-inline-block m-2 float-right"> Customers </button>
        </a>
        <table class="table">
    </div>
    <thead class="table-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Gender</th>
            <th scope="col">City</th>
            <th scope="col">state</th>
            <th scope="col">Satus</th>
            <th scope="col">Delete</th>
            <th scope="col">Restor</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
            <tr>
                <th scope="row"> {{ $customer->id }} </th>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->gender }}</td>
                <td>{{ $customer->city }}</td>
                <td>{{ $customer->state }}</td>
                <td>
                    @if ($customer->status == 1)
                        Active
                    @else
                        Inactive
                    @endif
                </td>
                <td>
                    <a href="{{ route('customer.trash.delete', ['id'=> $customer->id]) }}">
                        <button class="btn btn-danger">Delete</button> 
                    </a>
                </td>
                <td> 
                    <a href="{{ route('customer.trash.restore', ['id'=> $customer->id ]) }}">

                        <button class="btn btn-primary">Restor</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endsection

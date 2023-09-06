@extends('layouts.main')

@section('main-section')
    <div class="container">
        <a href="{{ route('customer.create') }}">

            <button class="btn btn-primary d-inline-block m-2 float-right"> Add</button>
        </a>
        <a href="{{ route('trash') }}">

            <button class="btn btn-warning d-inline-block m-2 float-right"> Go to Trash</button>
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
            <th scope="col">Trash</th>
            <th scope="col">update</th>
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
                    <a href="{{ route('customer.delete', ['id'=> $customer->id]) }}">
                        <button class="btn btn-warning">Trash</button> 
                    </a>
                </td>
                <td> 
                    <a href="{{ route('customer.edit', ['id'=> $customer->id ]) }}">

                        <button class="btn btn-primary">Edit</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endsection

@extends('layouts.main')

@section('main-section')
    <div class="container">
       
        <table class="table">
    </div>
    <thead class="table-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Gender</th>
            <th scope="col">Satus</th>
            <th scope="col">update</th>
            <th scope="col">Trash</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
        <tr>
            <th scope="row"> {{$customer->id}} </th>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->gender}}</td>
            <td>
                @if ($customer->status == 1)
                Active
                @else
                Inactive
                @endif
            </td>
            <td> <button class="btn btn-primary">Edit</button> </td>
            <td> <button class="btn btn-danger">Trash</button> </td>
        </tr>
      @endforeach  
    </tbody>
    </table>
@endsection

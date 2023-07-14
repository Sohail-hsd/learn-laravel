@extends('layouts.main')

@push('title')
    <title>Form</title>
@endpush

@section('main-section')

    <form method="POST" action="{{ url('/') }}/register">
        <div class="container">
            @csrf
            <div class="mb-3">
                <label class="form-label">User Name</label>
                <input value="{{old('name')}}" name="name" type="text" class="form-control" id="exampleInputname1" aria-describedby="nameHelp">
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input value="{{old('email')}}" name='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                <span class="text-danger">
                    @error('password')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input name="confirm-password" type="password" class="form-control" id="exampleInputPassword1">
                <span class="text-danger">
                    @error('confirm-password')
                    {{$message}}
                    @enderror
                </span>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection

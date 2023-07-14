@extends('layouts.main')

@push('title')
    <title>Home</title>
@endpush

@section('main-section')
    <h2>Home Page cantant</h2>
    @if ($a && $b)
       <h3> {{ $a . $b }} </h3>
    @endif
@endsection
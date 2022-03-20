@extends('layout.main')

@section('container')

    @if ( session()->has('success') )
    <div class="alert mt-4 alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    
    <div class="mt-3">
        <h1>Dashboard {{ Auth::user()->role }}</h1>
    </div>

@endsection
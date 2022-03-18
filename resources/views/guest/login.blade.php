@extends('layouts.main')

@section('content')

    <div class="row d-flex justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center vh-100">

            {{-- @if (session()->has('success'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> <br>
                
            @endif

            @if (session()->has('login-fail'))

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('login-fail') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> <br>
                
            @endif

            <form action="/login" method="POST" class="d-block">
                @csrf
                <h2 class="text-center text-primary">SNMPTN Tracker <i class="bi bi-bar-chart-line-fill"></i></h2>
                <h1 class="text-center text-primary"><i class="bi bi-arrow-return-right"></i></h1>
                <div class="form-floating mb-1">
                    <input required name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input required name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
                <a href="/register" class="mt-3 d-inline-block text-decoration-none">Registrasi</a>
            </form> --}}

            <div class="card rounded shadow p-3">
                <div class="card-body">
                    @if (session()->has('success'))

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        
                    @endif

                    @if (session()->has('login-fail'))

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('login-fail') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                        
                    @endif

                    <form action="/login" method="POST" class="d-block">
                        @csrf
                        <h2 class="text-center text-primary">SNMPTN Tracker <i class="bi bi-bar-chart-line-fill"></i></h2>
                        <h1 class="text-center text-primary"><i class="bi bi-arrow-return-right"></i></h1>
                        <div class="form-floating mb-1">
                            <input required name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input required name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                        <a href="/register" class="mt-3 d-inline-block text-decoration-none">Registrasi</a>
                    </form>
                </div>
            </div>

        </div>
    </div>


@endsection
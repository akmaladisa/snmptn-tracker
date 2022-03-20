@extends("guest-layout.main");

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center vh-100">
            <form action="/register" method="post">
                @csrf
                <h2 class="text-center text-primary mb-3">Registrasi Akun</h2>
                <div class="form-floating mb-3">
                    <input name="name" type="text" class="form-control" id="floatingPassword" placeholder="Nama" required>
                    <label for="floatingPassword">Nama</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control" id="floatingInput" placeholder="Email" required>
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control" id="floatingInput" placeholder="Email" required>
                    <label for="floatingInput">Password</label>
                </div>
                <label for="jurusan" class="text-muted font-monospace">Jurusan</label>
                <select class="form-select mb-3" aria-label="Default select example" name="jurusan" required>
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                </select>
                <input type="hidden" name="role" value="siswa">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Daftar</button>
                </div>

                <a href="/" class="mt-3 d-inline-block text-decoration-none">Login</a>
            </form>
        </div>
    </div>
@endsection


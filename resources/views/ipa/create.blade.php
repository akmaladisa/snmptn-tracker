@extends('layout.main')

@section('container')

    @if ( session()->has('success') )
    <div class="alert mt-4 alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="mt-3">
        <h1>Tambah Siswa IPA</h1>
    </div>

    <a href="/siswa-ipa" class="btn my-3 btn-primary btn-sm">
        <span data-feather="chevron-left"></span>
    </a>

    <div class="row">
        <div class="col-6">
            <form action="/siswa-ipa" method="post" class="pb-5">
                @csrf
                <div class="form-floating mb-3">
                    <select required name="user_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option></option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    <label for="floatingSelect">Nama Siswa</label>
                </div>
                <div class="form-floating mb-3">
                    <input required max="100" min="0" type="number" class="form-control" id="floatingInput" placeholder="Nilai Matematika" name="matematika">
                    <label for="floatingInput">matematika</label>
                </div>
                <div class="form-floating mb-3">
                    <input required max="100" min="0" type="number" class="form-control" id="floatingInput" placeholder="Nilai B. Indonesia" name="bindonesia">
                    <label for="floatingInput">Bahasa Indonesia</label>
                </div>
                <div class="form-floating mb-3">
                    <input required max="100" min="0" type="number" class="form-control" id="floatingInput" placeholder="Nilai B. Inggris" name="binggris">
                    <label for="floatingInput">Bahasa Inggris</label>
                </div>
                <div class="form-floating mb-3">
                    <input required max="100" min="0" type="number" class="form-control" id="floatingInput" placeholder="Nilai Kimia" name="kimia">
                    <label for="floatingInput">Kimia</label>
                </div>
                <div class="form-floating mb-3">
                    <input required max="100" min="0" type="number" class="form-control" id="floatingInput" placeholder="Nilai Fisika" name="fisika">
                    <label for="floatingInput">Fisika</label>
                </div>
                <div class="form-floating mb-3">
                    <input required max="100" min="0" type="number" class="form-control" id="floatingInput" placeholder="Nilai Biologi" name="biologi">
                    <label for="floatingInput">Biologi</label>
                </div>
                <div class="d-grid">
                    <button class="btn btn-success" type="submit">Tambah</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection
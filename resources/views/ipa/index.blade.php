@extends('layout.main')

@section('container')

    @if ( session()->has('success') )
    <div class="alert mt-4 alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    
    <div class="mt-3">
        <h1>Daftar Siswa IPA</h1>
    </div>

    <a href="/siswa-ipa/create" class="btn my-3 btn-success btn-sm">
        <span data-feather="plus"></span>
    </a>

    <div class="row">
        <div class="col-8">
            <table class="table text-center table-striped table-responsive table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Matematika</th>
                        <th>B. Indonesia</th>
                        <th>B. Inggris</th>
                        <th>Kimia</th>
                        <th>Fisika</th>
                        <th>Biologi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($students as $student)
                        
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student->siswaIPA->name }}</td>
                            <td>{{ $student->matematika }}</td>
                            <td>{{ $student->bindonesia }}</td>
                            <td>{{ $student->binggris }}</td>
                            <td>{{ $student->kimia }}</td>
                            <td>{{ $student->fisika }}</td>
                            <td>{{ $student->biologi }}</td>
                            <td>
                                <a class="btn text-white btn-sm btn-info" href="{{ route("siswa-ipa.show", $student->id) }}">
                                    <span data-feather="eye"></span>
                                </a>
                                <a class="btn mx-1 text-white btn-sm btn-warning" href="{{ route("siswa-ipa.edit", $student->id) }}">
                                    <span data-feather="edit"></span>
                                </a>

                                <form action="{{ route("siswa-ipa.destroy", $student->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-sm btn-danger">
                                        <span data-feather="trash-2"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
@extends('layouts/template')

@section('content')

    <div class="container">
        <h1>{{ $title }}</h1>

        <div class="mt-4">
            <div class="d-flex">
                <a href="{{ route('admin.index') }}" class="btn btn-outline-dark me-4">Home</a>
                <a href="{{ route('admin.tambahAccounts') }}" class="btn btn-dark">Tambah</a>
            </div>
            <div class="table-responsive mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <td width="80px">No</td>
                            <td>Username</td>
                            <td>Name</td>
                            <td width="200px">Role</td>
                            <td width="200px">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($accounts as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->username }}</td>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->role }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('admin.editAccounts') }}" class="me-3">Edit</a>
                                        <a href="{{ route('admin.deleteAccounts') }}" class="me-3">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
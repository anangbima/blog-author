@extends('layouts/template')

@section('content')

    <div class="container">
        <h1>{{ $title }}</h1>

        <div class="mt-4">
            <div class="d-flex">
                <a href="{{ route('admin.index') }}" class="btn btn-outline-dark me-4">Home</a>
                <a href="{{ route('admin.tambahPosts') }}" class="btn btn-dark">Tambah</a>
            </div>
            <div class="table-responsive mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <td width="80px">No</td>
                            <td>Title</td>
                            <td>Content</td>
                            <td width="200px">Date</td>
                            <td width="200px">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->title }}</td>
                                <td>{{ $p->content }}</td>
                                <td>{{ $p->date }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('admin.editPosts', $p->idpost) }}" class="me-3">Edit</a>
                                        <a href="{{ route('admin.deletePosts', $p->idpost) }}" class="me-3">Hapus</a>
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
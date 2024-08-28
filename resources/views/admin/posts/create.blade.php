@extends('layouts/template')

@section('content')

    <div class="container">
        <h1>Tambah Posts</h1>

        <div class="mt-4">
            <form action="{{ route('admin.prosesTambahPosts') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>

                <div class="mb-3">
                    <label for="">Date</label>
                    <input type="date" class="form-control" name="date">
                </div>

                <div class="mb-3">
                    <label for="">Content</label>
                    <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div>
                    <input type="submit" class="btn btn-dark px-5">
                </div>
            </form>
        </div>
    </div>

@endsection
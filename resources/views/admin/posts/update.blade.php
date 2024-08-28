@extends('layouts/template')

@section('content')

    <div class="container">
        <h1>Edit Posts</h1>

        <div class="mt-4">
            <form action="{{ route('admin.prosesEditPosts') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $posts->idpost }}">
                <div class="mb-3">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $posts->title }}">
                </div>

                <div class="mb-3">
                    <label for="">Date</label>
                    <input type="date" class="form-control" name="date" value="{{ $posts->date }}">
                </div>

                <div class="mb-3">
                    <label for="">Content</label>
                    <textarea name="content" id="" cols="30" rows="10" class="form-control">{{ $posts->content }}</textarea>
                </div>

                <div>
                    <input type="submit" class="btn btn-dark px-5">
                </div>
            </form>
        </div>
    </div>

@endsection
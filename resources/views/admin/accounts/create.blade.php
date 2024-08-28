@extends('layouts/template')

@section('content')

    <div class="container">
        <h1>Tambah Accounts</h1>

        <div class="mt-4">
            <form action="{{ route('admin.prosesTambahAccounts') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>

                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="mb-3">
                    <label for="">Role</label>
                    <select name="role" id="" class="form-control">
                        <option value="admin">Admin</option>
                        <option value="author">Author</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <div>
                    <input type="submit" class="btn btn-dark px-5">
                </div>
            </form>
        </div>
    </div>

@endsection
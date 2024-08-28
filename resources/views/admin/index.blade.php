@extends('layouts/template')

@section('content')

    <div class="container">
        <h1>Halo, {{ session('name') }}</h1>

        <div class="mt-4 row">
            <div class="col-lg-6 col-sm-12 mb-3">
                <div class="card bg-primary p-3 text-light">
                    <h5>Posts</h5>

                    <div class="mt-3">
                        
                    </div>

                    <a href="{{ route('admin.posts') }}" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 mb-3">
                <div class="card bg-success p-3 text-light">
                    <h5>Accounts</h5>

                    <div class="mt-3">
                        
                    </div>

                    <a href="{{ route('admin.accounts') }}" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>

@endsection
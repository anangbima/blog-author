<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Login to My Blog</title>
</head>
<body class="bg-light">
    <div class="position-relative" style="width: 100vw; height: 100vh;">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="card bg-white p-5" style="width: 500px;">
                <div class="text-center">
                    <h5>Login</h5>
                </div>

                <div class="mt-3">
                    <form action="{{ route('auth.login') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" name="username"
                                class="form-control @error('username') is-invalid @enderror" id="exampleInputEmail1"
                                value="{{ old('username') }}" autofocus aria-describedby="emailHelp">
                            <div class="invalid-feedback">
                                @error('username')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror"
                                id="exampleInputPassword1">
                            <div class="invalid-feedback">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-dark mt-4 w-100">Login</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Boostrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
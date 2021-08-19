@extends('layouts.main')


@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-registration">
            <form action="/register" method="POST">
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center">Silahkan Registrasi</h1>

                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded @error('name')is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name')}} ">
                    <label for="name">Name</label>
                    @error('name')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control  @error('username')is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username')}}">
                    <label for="username">Username</label>
                    @error('username')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email')}}">
                    <label for="email">Email</label>
                    @error('email')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded mb-4 @error('password')is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
            </form>

            <small class="d-block text-center mt-4"><a href="/login">Login disini</a></small>
        </main>
    </div>
</div>


@endsection
@extends('layouts.main')


@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-registration">
            <form>
                <h1 class="h3 mb-3 fw-normal text-center">Silahkan Registrasi</h1>

                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded" id="name" placeholder="Name">
                    <label for="name">Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="username" placeholder="username">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded mb-4" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
            </form>

            <small class="d-block text-center mt-4"><a href="/login">Login disini</a></small>
        </main>
    </div>
</div>


@endsection
@extends('layouts.login-main')
@section('container')


<section id="portfolio" class="portfolio sections-bg">
    <div class="container position-relative" data-aos="fade-up">
        <div class="col-lg-12 text-center">
            <main class="form-registration w-100 m-auto">
                <div class="row d-flex justify-content-center">

                    <form action="/register" method="post">
                        @csrf
                        <div>
                            <style>
                                .bi-person-circle {
                                    font-size: 48px;
                                    /* Atur ukuran ikon sesuai kebutuhan */
                                    vertical-align: middle;
                                    /* Memastikan ikon berada di tengah vertikal dengan teks */

                                }
                            </style>
                            <i class="bi bi-person-circle">

                            </i>
                            <h3>Registration Form</h3>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                            <label for="name">Name</label>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="username" class="form-control rounded-top @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                            <label for="username">Username</label>
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control rounded-top @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating ">
                            <input type="password" name="password" class="form-control rounded-top @error('password') is-invalid @enderror " id="password" placeholder="Password" required value="{{ old('password') }}">
                            <label for="Password">Password</label>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div> -->
                        <br>
                        <button class="btn btn-primary w-100 py-2" type="submit"><i class="bi bi-box-arrow-in-right"></i> Registration</button>

                    </form>
                    <small class="mt-3">Already Registed?<a href="login"> Login</a></small>
                </div>
        </div>
        </main>
    </div>
</section>
@endsection
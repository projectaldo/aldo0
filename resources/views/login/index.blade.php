@extends('layouts.login-main')
@section('container')


<section id="portfolio" class="portfolio sections-bg">
    <div class="container position-relative" data-aos="fade-up">
        <div class="col-lg-12 text-center">

            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif


            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <main class="form-signin w-100 m-auto">
                <div class="row d-flex justify-content-center">

                    <form action="/login" method="post">
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
                            <h3>Silahkan Login</h3>
                        </div>
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{old('email')}}">
                            <label for="email">Email address</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating ">
                            <input type="password" name="password" class="form-control " id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>

                        <!-- <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div> -->
                        <br>
                        <button class="btn btn-primary w-100 py-2" type="submit"><i class="bi bi-box-arrow-in-right"></i> Login</button>

                    </form>
                    <small class="mt-3">No Registered?<a href="register"> Register Now!</a></small>
                </div>
        </div>
        </main>
    </div>
</section>
@endsection
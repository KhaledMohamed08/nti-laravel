@extends('layouts.auth')
@section('title', 'Register')
@section('content')
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form>
                        <!-- Name input -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput1" placeholder="user name">
                            <label for="floatingInput1">User Number</label>
                        </div>

                        <!-- Email input -->
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput2" placeholder="name@example.com">
                            <label for="floatingInput2">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword1" placeholder="Password">
                            <label for="floatingPassword1">Password</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword2" placeholder="Confirm Password">
                            <label for="floatingPassword2">Confirm Password</label>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                                    class="link-danger">Register</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('styles')
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
@endpush

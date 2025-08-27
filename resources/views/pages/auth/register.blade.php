@extends('layouts.empty')
@section('title', 'Register')
@section('body')
    <div class="container">
        <p class="h1 text-center m-3">Register Page</p>
        <x-alert />
        <form class="w-50" action="{{ route('register.req') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">User Name*</label>
                <input type="text" name="name" class="form-control" id="exampleInputname1"
                    aria-describedby="nameHelp">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputphone1" class="form-label">User Phone*</label>
                <input type="text" name="phone" class="form-control" id="exampleInputphone1"
                    aria-describedby="phoneHelp">
                @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address*</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="inputPassword5" class="form-label">Password</label>
                <input type="password" name="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                <div id="passwordHelpBlock" class="form-text">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces,
                    special characters, or emoji.
                </div>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="inputPassword6" class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" id="inputPassword6" class="form-control" aria-describedby="passwordHelpBlock">
            </div>
            <button type="submit" class="btn btn-primary">Register  </button>
        </form>
    </div>
@endsection

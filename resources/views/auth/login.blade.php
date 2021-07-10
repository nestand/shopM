@extends('auth.layouts.master')

@section('title', 'Authorization')

@section('content')
    <form method="POST" action="{{ route('login') }}" aria-label="Login">
        @csrf
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

            <div class="col-md-8">
                <input id="email" type="email" class="form-control"
                       name="email" value="" required autofocus>

            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

            <div class="col-md-8">
                <input id="password" type="password" class="form-control"
                       name="password" required>

            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
            </div>
        </div>
    </form>
@endsection

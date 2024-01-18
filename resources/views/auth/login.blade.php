@extends('layout.layout')
@section('content')
    <div id="loginpage">
        <div class="page">
            <div class="form">
                <form action="/login" method="post">
                    @csrf
                    <p class="label">Log in to my account</p>
                    <div class="control">
                        @error('email')
                        <small>
                            {{ $message }}
                        </small>
                        @enderror
                        <input type="text" name="email" id="email" value={{ old('email') }}>
                        <label for="email">Your email</label>
                    </div>

                    <div class="control">
                        @error('password')
                        <small>
                            {{ $message }}
                        </small>
                        @enderror
                        <input type="password" name="password" id="password">
                        <label for="password">Your password</label>
                    </div>

                    <button class="click">Login</button>

                    <p class="redirect">
                        Dont have an account? <a href="/signup">Sign Up</a> Here.
                    </p>

                </form>
            </div>
        </div>
    </div>
@endsection

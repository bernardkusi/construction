@extends('layout.layout')
@section('content')
    <div class="page">
        <div id="loginpage">
            <div class="form">
                <form action="/signup" method="post">
                    @csrf
                    <p class="label">Create a new account</p>
                    <div class="control">
                        @error('firstname')
                            <small>
                                {{ $message }}
                            </small>
                        @enderror
                        <input type="text" name="firstname" id="firstname" value={{ old('firstname') }}>
                        <label for="firstname">Your firstname</label>
                    </div>

                    <div class="control">
                        @error('surname')
                            <small>
                                {{ $message }}
                            </small>
                        @enderror
                        <input type="text" name="surname" id="surname" value={{ old('surname') }}>
                        <label for="surname">Your surname</label>
                    </div>

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

                    <div class="control">
                        <input type="password" name="password_confirmation" id="password_confirmation">
                        <label for="password_confirmation">Confirm Password</label>
                    </div>

                    <button class="click">Signup</button>

                    <p class="redirect">
                        Already have an account? <a href="/login">Log in</a> Here.
                    </p>

                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layout.layout')
@section('content')
<div id="loginpage">
    <div class="page">
        <div class="form">
            <form action="/admin/addservice" method="post">
                @csrf
                <p class="label">Create A New Sevice</p>
                <div class="control">
                    @error('servicename')
                    <small>
                        {{ $message }}
                    </small>
                    @enderror
                    <input type="text" name="servicename" id="servicename" >
                    <label for="servicename">Servicename</label>
                </div>

                <div class="control">
                    @error('servicetext')
                    <small>
                        {{ $message }}
                    </small>
                    @enderror
                    <textarea name="servicedescription" id="servicedescription" cols="30" rows="10"></textarea>
                    <label for="servicedescription">Servicedescription</label>
                </div>

                <button class="click">Create Service</button>
            </form>
        </div>
    </div>
</div>
@endsection

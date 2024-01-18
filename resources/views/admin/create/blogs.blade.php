@extends('layout.layout')
@section('content')
<div id="loginpage">
    <div class="page">
        <div class="form">
            <form action="/admin/addblog" method="post">
                @csrf
                <p class="label">Create A New Blog</p>
                <div class="control">
                    @error('blogname')
                    <small>
                        {{ $message }}
                    </small>
                    @enderror
                    <input type="text" name="blogname" id="blogname" >
                    <label for="blogname">Blogname</label>
                </div>

                <div class="control">
                    @error('blogtext')
                    <small>
                        {{ $message }}
                    </small>
                    @enderror
                    <textarea name="blogtext" id="blogtext" cols="30" rows="10"></textarea>
                    <label for="blogtext">Blogtext</label>
                </div>

                <button class="click">Create Blog</button>
            </form>
        </div>
    </div>
</div>
@endsection

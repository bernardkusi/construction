@extends('layout.layout')
@section('content')
    <x-banner page="Our Blogs" />

    <div id="blogspage">
        @if (count($blogs) > 0)
        @foreach ($blogs as $blog)
        <div class="blog">
            <div class="image">

            </div>
            <div class="texts">
                <h5 class="title">
                    {{ $blog->blogname }}
                </h5>
                <p>
                    {{ $blog->blogtext }}
                </p>
            </div>
        </div>
        @endforeach
        @else
            <p style="text-align: center;
            color:grey">No Blogs TO Show</p>
        @endif
        {{$blogs->links()}}
    </div>

@endsection    

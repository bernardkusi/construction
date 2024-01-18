@extends('layout.layout')
@section('content')
    <div class="page">
        <div class="adminpage">
            <div class="flex">
                <h4 class="heading">Blogs On Page</h4>

                <a href={{ route("createblog") }}>Create new blog</a>
            </div>
            <table>
                <thead>
                    <td>Blogimage</td>
                    <td>Blogname</td>
                    <td>Blogtext</td>
                    <td>actions</td>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td>
                                {{-- {{ $blog->name }} --}}
                            </td>
                            <td>
                                {{ $blog->blogname }}
                            </td>
                            <td>
                                {{ $blog->blogtext }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection

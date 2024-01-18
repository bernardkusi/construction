@extends('layout.layout')
@section('content')
    <div class="page">
        <div class="adminpage">
            <h4 class="heading">Messages From Users</h4>
            <table>
                <thead>
                    <td>Name</td>
                    <td>Email</td>
                    <td>message</td>
                    <td>actions</td>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>
                                {{ $message->name }}
                            </td>
                            <td>
                                {{ $message->email }}
                            </td>
                            <td>
                                {{ $message->message }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection

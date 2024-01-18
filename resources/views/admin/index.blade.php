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

        <div style="height: 100px"></div>  


        <h4 class="heading">Registered Users</h4>
        <table>
            <thead>
                <td>Fullname</td>
                <td>Email</td>
                <td>Usertype</td>
                <td>actions</td>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            {{ $user->firstname }} {{ $user->surname }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>
                            {{ $user->usertype }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
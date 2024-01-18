@extends('layout.layout')
@section('content')
    <div class="page">
        <div class="adminpage">
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

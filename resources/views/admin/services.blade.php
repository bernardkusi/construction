@extends('layout.layout')
@section('content')
<div class="page">
    <div class="adminpage">
        <div class="flex">
            <h4 class="heading">Services On Page</h4>
            <a href={{ route("createservice") }}>Create new service</a>
        </div>
        <table>
            <thead>
                <td>serviceimage</td>
                <td>servicename</td>
                <td>servicetext</td>
                <td>actions</td>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>
                            {{-- {{ $service->name }} --}}
                        </td>
                        <td>
                            {{ $service->servicename }}
                        </td>
                        <td>
                            {{ $service->servicedescription }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
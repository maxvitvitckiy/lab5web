@extends('layout')

@section('page')
    User
@endsection

@section('table')
    @if($user)
        <table>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->description}}</td>
            </tr>
            @endif
        </table>
        <a href="/" class="button">Back to main</a>
@endsection
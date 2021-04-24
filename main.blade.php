@extends('layout')

@section('page')
    Main
@endsection


@section('table')


    @if(count($Users))
    <table>
        <tr>
            <th>Username</th>
            <th>Description</th>
        </tr>
        @foreach($Users as $user)
        <tr>
            <td><a href="/{{$user->name}}/UserPage" style="text-decoration: none">{{$user->name}}</a></td>
            <td>{{$user->description}}</td>
        </tr>
        @endforeach
    </table>
    @endif
    <hr>
    <a href="/search" class="button">Search</a>
@endsection
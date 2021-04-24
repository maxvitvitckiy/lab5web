@extends('layout')

@section('page')
    Search
@endsection

@section('add')
    <form method="POST" style="margin: auto">
        @csrf
        <input type="text" name="name" placeholder="Username" autocomplete="off">
        <button type="submit">Search</button>
    </form>
@endsection

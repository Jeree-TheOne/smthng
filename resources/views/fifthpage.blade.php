@extends('layouts/app')

@section('title-block')FIFTH @endsection

@section('content')
    <h1>Fifth page</h1>
    <ul>
    @foreach($hz as $hizi)
        <li>{{ $hizi->body }}</li>
    @endforeach
    </ul>
@endsection

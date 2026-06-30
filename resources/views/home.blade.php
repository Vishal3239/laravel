{{-- <x-alert />

@include('layouts.header')

<h1>Home Page</h1>

@include('layouts.footer') --}}

{{-- <a href="/about/vishal"> about</a><br>
<a href="/vishal"> contact</a>
<div>
    <h1>{{$name}}</h1>
</div>
<div>
    @foreach ($users as $user)
        <h1>{{$user}}</h1>
    @endforeach
</div> --}}

@extends('layouts.master');
@section('contant')
    {{-- <h1>this is home Page</h1> --}}
@endsection
@section('sidebar')
    @parent
    <ul>
        <li><a href="#">🚪 Public Site</a></li>

    </ul>

@endsection

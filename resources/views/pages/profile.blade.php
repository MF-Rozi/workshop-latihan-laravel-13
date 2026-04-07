@extends('master')

@section('content')

<h1>Profile</h1>
<p> Selamat Datang Di Halaman Profile {{ $users->first()->name }}</p>

<p> Email : {{ $users->first()->email }}</p>

@endsection

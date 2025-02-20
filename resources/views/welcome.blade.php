@extends('layouts.auth')
@section('title', "Samenkomst")
@section('content')
<div class="welcome">
    <h1>Welkom, {{ auth()->user()->name }}!</h1>
    <p>Fijn dat je er bent. Dit is je welkomstpagina.</p>

    @if(auth()->check() && auth()->user()->role === 'admin')
    <a href="{{ route('admin.adduser') }}">Gebruikers beheren</a>
    @endif
</div>

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
@endsection
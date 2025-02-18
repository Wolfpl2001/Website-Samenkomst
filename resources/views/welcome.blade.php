@extends('layouts.auth')
@section('title', "Samenkomst")
@section('content')
<div class="welcome">
    <h1>Welkom, {{ auth()->user()->name }}!</h1>
    <p>Fijn dat je er bent. Dit is je welkompagina.</p>
</div>
@endsection
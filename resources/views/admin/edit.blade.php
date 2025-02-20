@extends('layouts.auth')
@section('title', "Gebruiker bewerken")
@section('content')
<div class="Add user">
    <h1>Gebruiker bewerken</h1>
    @if (session('succes'))
    <div class="alert alert-succes">
        {{ session('succes') }}
    </div>
    @endif
    <form action="{{ route('user.update', $user->id) }}" method="POST">

        @csrf
        @method('PATCH')
        <div>
            <label for="name">Naam:</label>
            <input type="text" id="name" name="name" value="{{$user->name}}" required>
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" value="{{$user->email}}" required>
        </div>
        <div>
            <label for="password">Wachtwoord(leeg ):</label>
            <input type="text" id="password" name="password" value="{{$user->password}}" required>
        </div>
        <div>
            <label for="password_confirmation">Bevestig Wachtwoord:</label>
            <input type="text" id="password_confirmation" name="password_confirmation">
        </div>
        <div>
            <label for="role">Rol:</label>
            <select id="role" name="role" required>
                <option value="gebruiker" {{ $user->role != 'admin' ? 'selected' : '' }}>Gebruiker</option>
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>

            </select>
        </div>
        <button type="submit">Bijwerken</button>
    </form>
</div>
@endsection
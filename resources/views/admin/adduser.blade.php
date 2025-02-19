@extends('layouts.auth')
@section('title', "SavePage")
@section('content')
<div class="gebruiker_Page">
    <h1>Gebruikers Dashboard</h1>
    @if(session('succes'))
    <div class="alert alert-succes">
        {{ session('succes') }}
    </div>
    @endif
    <form action="{{route('user.store')}}" method="POST">
        @csrf
        <div>
            <label for="name">Naam:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">E-mail:</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Wachtwoord:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Bevestig wachtwoord:</label>
            <input type="text" id="password_confirmation" name="password_confirmation" required>
        </div>
        <div>
            <label for="role">Role:</label>
            <select name="role" id="role" required>
                <option value="0">Gebruiker</option>
                <option value="1">Admin</option>
            </select>
        </div>
        <button type="submit">Gebruiker aanmaken</button>
    </form>
    <h2>Gebruikers</h2>
    <table>
        <thead>
            <tr>
                <th>Naam</th>
                <th>E-mail</th>
                <th>Type</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role ? 'Admin' : 'Gebruiker' }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}">Bewerken</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Verwijderen</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
@extends('layouts.auth')
@section('title', "SavePage")
@section('content')

<div class="container">
    <!-- Linker sectie: Gebruikersformulier -->
    <div class="left-section">
        <h2>Nieuwe Gebruiker Toevoegen</h2>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
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
                <input type="text" id="email" name="email" required pattern="[a-zA-Z0-9._%+-]+@gmail\.com$"
                    title="Moet een Gmail-adres zijn">
            </div>
            <div>
                <label for="password">Wachtwoord:</label>
                <input type="password" id="password" name="password" required minlength="8"
                    title="Moet minimaal 8 tekens bevatten">
            </div>
            <div>
                <label for="password_confirmation">Bevestig wachtwoord:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required minlength="8"
                    title="Moet minimaal 8 tekens bevatten">
            </div>
            <div>
                <label for="role">Role:</label>
                <select name="role" id="role" required>
                    <option value="gebruiker">Gebruiker</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <button type="submit">Gebruiker toevoegen</button>
        </form>
    </div>

    <!-- Rechter sectie: Gebruikerslijst -->
    <div class="right-section">
        <h2>Gebruikerslijst</h2>
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
                        <a href="{{ route('user.edit', $user->id) }}">Bewerken</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
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
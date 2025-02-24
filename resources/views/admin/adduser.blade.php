<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel=" stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    @include('layouts.nav')
</head>

<body>
    <div class="container mt-5">
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
                <div class="form-group">
                    <label for="name">Naam:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="text" id="email" name="email" class="form-control" required
                        pattern="[a-zA-Z0-9._%+-]+@gmail\.com$" title="Moet een Gmail-adres zijn"
                        autocomplete="new-password">
                </div>
                <div>
                    <label for="password">Wahtwoord:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Bevestig wachtwoord:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                        required minlength="8" title="Moet minimaal 8 tekens bevatten" autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="role">Role:</label>
                    <select name="role" id="role" class="form-control" required>
                        <option value="gebruiker">Gebruiker</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Gebruiker toevoegen</button>
            </form>
        </div>

        <!-- Rechter sectie: Gebruikerslijst -->
        <!-- <div class=" right-section">
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
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Verwijderen</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
        </div> -->
    </div>

</body>

</html>
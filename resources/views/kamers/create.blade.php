<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulier</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('layouts.nav')
    <title>Document</title>
</head>
<div class="container mt-5">
    <div class="card p-4 shadow">
        <h2 class="mb-4">Voeg een nieuwe ruimte toe</h2>
        @if (session('succes'))
        <div class="alert alert-succes">
            {{ session('succes') }}
        </div>
        @endif
        <form action="{{route('kamers.store')}}" method="POST">
            @csrf
            <!-- Nummer -->
            <div class="mb-3">
                <label for="num" class="form-label">Nummer</label>
                <input type="number" class="form-control" id="num" name="num" value="{{ old('num') }}" required>
            </div>

            <!-- Type -->
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}" required>
            </div>

            <!-- Maximaal aantal personen -->
            <div class="mb-3">
                <label for="max_people" class="form-label">Maximaal aantal personen</label>
                <input type="number" class="form-control" id="max_people" name="max_people"
                    value="{{ old('max_people') }}" required>
            </div>

            <!-- Tafelkeuze -->
            <div class="mb-3">
                <label for="table" class="form-label">Tafel</label>
                <select class="form-select" name="table" id="table" required>
                    <option value="" disabled selected>Kies een tafel</option>
                    <option value="C">C</option>
                    <option value="T">T</option>
                </select>
            </div>

            <!-- Scherm -->
            <div class="mb-3">
                <label for="screen" class="form-label">Scherm</label>
                <input type="text" class="form-control" id="screen" name="screen" value="{{ old('screen') }}">
            </div>

            <!-- Status -->
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" id="status" required>
                    <option value="" disabled selected>Kies een status</option>
                    <option value="Beschikbaar">Beschikbaar</option>
                    <option value="Bezet">Bezet</option>
                </select>
            </div>

            <!-- Verzenden knop -->
            <button type="submit" class="btn btn-primary w-100">Opslaan</button>
        </form>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
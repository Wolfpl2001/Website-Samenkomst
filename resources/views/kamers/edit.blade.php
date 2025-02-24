<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamer Bewerken</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    @include('layouts.nav')
</head>

<body>
    <div class="container mt-5">
        <h2>Bewerk Kamer: {{ $kamer->num }}</h2>

        @if (session('succes'))
        <div class="alert alert-success">
            {{ session('succes') }}
        </div>
        @endif

        <form action="{{ route('kamers.update', $kamer->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="num">Nummer</label>
                <input type="number" name="num" class="form-control @error('num') is-invalid @enderror"
                    value="{{ old('num', $kamer->num) }}" required min="1">
                @error('num')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" name="type" class="form-control" value="{{ $kamer->type }}" required>
            </div>

            <div class="form-group">
                <label for="max_people">Max Aantal Personen</label>
                <input type="number" name="max_people" class="form-control" value="{{ $kamer->max_people }}" required>
            </div>

            <div class="mb-3">
                <label for="table" class="form-label">Tafel</label>
                <select class="form-select" name="table" id="table" required>
                    <option value="" disabled>Kies een tafel</option>
                    <option value="C" {{ $kamer->table == 'C' ? 'selected' : '' }}>C</option>
                    <option value="T" {{ $kamer->table == 'T' ? 'selected' : '' }}>T</option>
                </select>
            </div>


            <div class="form-group">
                <label for="screen">Scherm</label>
                <input type="text" name="screen" class="form-control" value="{{ $kamer->screen }}">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select class="select-status" name="status" id="status" required>
                    <option value="" disabled>Kies een status</option>
                    <option value="Beschikbaar" {{$kamer->status == 'Beschikbaar' ? 'selected' : ''}}>Beschikbaar
                    </option>
                    <option value="Bezit" {{$kamer->status == 'Bezit' ? 'selected' : ''}}> Bezit</option>
                </select>
                <input type="text" name="status" class="form-control" value="{{ $kamer->status }}">
            </div>

            <button type="submit" class="btn btn-primary">Opslaan</button>
            <a href="{{ route('kamers.index') }}" class="btn btn-secondary">Annuleren</a>
        </form>

    </div>
</body>

</html>
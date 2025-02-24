<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kameroverzicht</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    @include('layouts.nav')
</head>

<body>

    <div class="container mt-5">
        @if (session('succes'))
        <div class="alert alert-succes">
            {{ session('succes') }}
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <h2 class="mb-4"> Kameroverzicht</h2>
        @if(auth()->check() && auth()->user()->admin)
        <a href="{{ route('kamers.create') }}" class="btn btn-success">Add New Room</a>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nummer</th>
                    <th>Type</th>
                    <th>Max_people</th>
                    <th>Table</th>
                    <th>Screen</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kamers as $kamer)
                <tr>
                    <td>{{ $kamer->num }}</td>
                    <td>{{ $kamer->type }}</td>
                    <td>{{ $kamer->max_people }}</td>
                    <td>{{ $kamer->table }}</td>
                    <td>{{ $kamer->screen }}</td>
                    <td>{{ $kamer->status }}</td>
                    <td>
                        @if(auth()->check() && auth()->user()->admin)
                        <a href="{{ route('kamers.edit', $kamer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('kamers.destroy', $kamer->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    @include('layouts.nav')
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Reserveringen</h2>
        <a href="{{ route('admin.adduser') }}" class="btn btn-success">Add New User</a>
        <a href="{{ route('reserviring.create') }}" class="btn btn-success">Add New Reservation</a>

        <table class="table table-bordered">
            <tr>
                <th>Vornaam</th>
                <th>Achternaam</th>
                <th>Kamer nr</th>
                <th>Vanaf</th>
                <th>T/m</th>
            </tr>
            @foreach ($data as $reservation)
            <tr>
                <td>{{ $reservation->first_name }}</td>
                <td>{{ $reservation->last_name }}</td>
                <td>{{ $reservation->local_id }}</td>
                <td>{{ $reservation->Start_Date }}</td>
                <td>{{ $reservation->End_Date }}</td>
                <td>
                    <a href="{{ route('reserviring.edit', $reservation->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('reserviring.destroy', $reservation->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
{{--public $fillable = ['First_Name','Last_name', 'Local_id', 'Start_Date', 'End_Date', 'Status'];--}}

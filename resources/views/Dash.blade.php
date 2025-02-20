<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/dash.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.nav')
    <title>Dashboard</title>
</head>
<body>


    <div>
        <h1>Reserveringen</h1>
        <table>
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
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>

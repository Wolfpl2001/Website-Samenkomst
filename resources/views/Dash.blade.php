<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/dash.css') }}">
    @include('layouts.nav')
    <title>Dashboard</title>
</head>
<body>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<table>
    <tr>
        <td>
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
        </td>
        <td>
            <h1>Contracten</h1>
            <table>
                <tr>
                    <th>Contract ID</th>
                    <th>Contract Type</th>
                    <th>Contract Duur</th>
                    <th>Contract Start</th>
                    <th>Contract Eind</th>
                    <th>Acties</th>
                </tr>
                @foreach ($contract as $contract)
                <tr>
                    <td>{{ $contract->id }}</td>
                    <td>{{ $contract->Company_Name }}</td>
                    <td>{{ $contract->Reserviring_id }}</td>
                    <td>{{ $contract->Start_Date }}</td>
                    <td>{{ $contract->End_Date }}</td>
                    <td>
                        <form action="{{route('contract.verlengt')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $contract->id }}">
                            <input type="submit" value="Verlengen">
                        </form>
                    </td>
                </tr>
                @endforeach
                </table>
            </td>
        </tr>
    </table>
</body>
</html>

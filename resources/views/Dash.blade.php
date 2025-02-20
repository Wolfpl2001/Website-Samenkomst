<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/dash.css')}}">
    <title>Dashboard</title>
</head>
<body>
    <nav>
        <ul>
            @php
                $login = 1;
                $admin = 1;
            @endphp
            @if ($login == 0)
                <li><a href="">Login</a></li>
            @endif
            @if ($login == 1)
                <li><a href="">Logout</a></li>
            @endif
            <li><a href="">Kameroverzicht</a></li>
            <li><a href="">Reserviring</a></li>
            @if($admin == 1)
                <li><a href="">Beheren</a></li>
            @endif
        </ul>
        <input type="text" name="" id=""placeholder="Zoeken">
    </nav>

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
        @foreach ($data as $data)
        <tr>
            <td>{{$data->first_name}}</td>
            <td>{{$data->last_name}}</td>
            <td>{{$data->local_id}}</td>
            <td>{{$data->Start_Date}}</td>
            <td>{{$data->End_Date}}</td>
        </tr>
        @endforeach

        </table>
    </div>
</body>
</html>

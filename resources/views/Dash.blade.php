<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                <th>Kamer</th>
                <th>Vanaf</th>
                <th>T/m</th>
            </tr>
        @php
            $data = [1,2.3,4,5,6,7,8,9,10];
        @endphp
        @foreach ($data as $data)
        <tr>
            <td>data</td>
            <td>data</td>
            <td>data</td>
            <td>data</td>
            <td>data</td>
        </tr>
        @endforeach

        </table>
    </div>
</body>
</html>

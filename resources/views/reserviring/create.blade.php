@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@extends('layouts.auth')

    <form action="{{route('reserviring.store')}}" method="POST">
        @csrf
        <label for="firstname">Voornaam</label>
        <input type="text" id="First_Name" name="First_Name"><br>
        <label for="lastname">Achternaam</label>
        <input type="text" id="Last_Name" name="Last_Name"><br>

        <label for="startdate">Start Datum:</label>
        <input type="date" id="Start_Date" name="Start_Date"><br>
        <label for="enddate"> Eind Datum:</label>
        <input type="date" id="End_Date" name="End_Date"><br>

        <label for="Kamer"> Kamer </label>
        <select name ="local_id" id="local_id">
            @foreach ($locals as $kamer)
                <option value ="{{$kamer->id}}">{{$kamer->num}} - {{$kamer->type}} </option>
            @endforeach
        </select>
        <label for="statusCheck"> Status </label>

        <select name="status" id="Status">
            <option value="active">Actief</option>
            <option value="inactive">Inactief</option>
        </select>
        <button type="Submit">Submit</button>
    </form>


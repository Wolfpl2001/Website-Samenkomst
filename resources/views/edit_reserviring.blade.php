<form action="{{route('reserviring.update')}}" method="POST">
    <label for="fname">Voornaam</label>
    <input type="text" id="fname" name="fname" value="{{$reserviring->first_name}}"><br>
    <label for="lname">Achternaam</label>
    <input type="text" id="lname" name="lname" value="{{$reserviring->last_name}}"><br>

    <label for="startdate">Start Datum:</label>
    <input type="date" id="Start_Date" name="Start_Date" value="{{$reserviring->Start_Date}}"><br>
    <label for="enddate"> Eind Datum:</label>
    <input type="date" id="End_Date" name="End_Date" value="{{$reserviring->End_Date}}"><br>
    <label for="enddate"> Eind Datum:</label>

    <label for="activeCheck"> Actief </label>
    <select name="active_state" id="active_state">
        <option value="active">Actief</option>
        <option value="inactive">Inactief</option>
    </select>
    <button type="Submit">Submit</button>
</form>

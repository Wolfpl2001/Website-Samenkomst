<form action="{{route('reserviring.update')}}" method="POST">
    <label for="firstname">Voornaam</label>
    <input type="text" id="First_Name" name="First_Name" value="{{$reservation->first_name}}"><br>
    <label for="lname">Achternaam</label>
    <input type="text" id="Last_Name" name="Last_Name" value="{{$reservation->last_name}}"><br>

    <label for="startdate">Start Datum:</label>
    <input type="date" id="Start_Date" name="Start_Date" value="{{$reservation->Start_Date}}"><br>
    <label for="enddate"> Eind Datum:</label>
    <input type="date" id="End_Date" name="End_Date" value="{{$reservation->End_Date}}"><br>
    <label for="enddate"> Eind Datum:</label>

    <label for="activeCheck"> Actief </label>
    <select name="status" id="status">
        <option value="active">Actief</option>
        <option value="inactive">Inactief</option>
    </select>
    <button type="Submit">Submit</button>
</form>

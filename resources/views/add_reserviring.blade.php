    @csrf
    <form action="{{route('reserviring.create')}}" method="POST">
        <label for="firstname">Voornaam</label>
        <input type="text" id="First_Name" name="First_Name"><br>
        <label for="lastname">Achternaam</label>
        <input type="text" id="Last_Name" name="Last_Name"><br>

        <label for="startdate">Start Datum:</label>
        <input type="date" id="Start_Date" name="Start_Date"><br>
        <label for="enddate"> Eind Datum:</label>
        <input type="date" id="End_Date" name="End_Date"><br>

        <label for="statusCheck"> Actief </label>
        <select name="status" id="Status">
            <option value="active">Actief</option>
            <option value="inactive">Inactief</option>
        </select>
        <button type="Submit">Submit</button>
    </form>


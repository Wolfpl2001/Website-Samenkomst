
    <form action="{{route('reserviring.create')}}" method="POST">
        <label for="fname">Voornaam</label>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Achternaam</label>
        <input type="text" id="lname" name="lname"><br>

        <label for="startdate">Start Datum:</label>
        <input type="date" id="Start_Date" name="Start_Date"><br>
        <label for="enddate"> Eind Datum:</label>
        <input type="date" id="End_Date" name="End_Date"><br>

        <input type="checkbox" id="Status">
        <button type="Submit">Submit</button>
    </form>

{{--public $fillable = ['First_Name','Last_name', 'Local_id', 'Start_Date', 'End_Date', 'Status'];--}}

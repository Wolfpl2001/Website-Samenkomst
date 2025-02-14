<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reserviring_model extends Model
{
    protected $table = 'Reserviring';
    protected $primaryKey = 'id';
    public $fillable = ['First_Name','Last_name', 'Local_id', 'Start_Date', 'End_Date', 'Status'];
    public $timestamps = false;
}

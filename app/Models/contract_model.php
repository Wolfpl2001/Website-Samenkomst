<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contract_model extends Model
{
    protected $table = 'Contract';
    protected $primaryKey = 'id';
    public $fillable = ['Company_Name', 'Reserviring_id', 'Start_Date', 'End_Date', 'Status'];
    public $timestamps = false;
}

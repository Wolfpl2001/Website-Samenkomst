<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class locals_model extends Model
{
    protected $table = 'Locals';
    protected $primaryKey = 'id';
    public $fillable = ['num', 'type', 'max_people', 'table', 'screen', 'status'];
    public $timestamps = false;
}

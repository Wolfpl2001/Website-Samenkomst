<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class locals extends Model
{
    protected $table = 'locals';
    protected $primaryKey = 'id';
    public $fillable = ['num', 'type', 'max_people', 'table', 'screen', 'status'];
    public $timestamps = false;
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeslots extends Model
{
    use HasFactory;

    
    protected $primaryKey = 'timeslot_id';
    protected $fillable = [ 'time' ];
}

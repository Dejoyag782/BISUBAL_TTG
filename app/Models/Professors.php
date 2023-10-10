<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professors extends Model
{
    use HasFactory;

    protected $primaryKey = 'professor_id';
    protected $fillable = [ 'professor_name', 'professor_email', 'professor_course', 'professor_unvtime' ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $primaryKey = 'class_id';
    protected $fillable = [ 'class_name', 'class_population', 'class_courses', 'class_unv_rooms' ];
}

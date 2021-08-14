<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "name",
        "name_french",
        "name_kiny",
        "parent_id"
    ];
}

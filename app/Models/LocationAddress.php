<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationAddress extends Model
{
    protected $fillable = [
        "location_id",
        "location_type",
        "name",
        "name_french",
        "name_kiny",
        "parent_id"
    ];

    use HasFactory;

    public $timestamps = false;
}

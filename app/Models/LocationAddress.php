<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed location_id
 */
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

    protected $primaryKey = "location_id";

    use HasFactory;

    public $timestamps = false;

    public function getPageContent(): string
    {
        return  \App\Http\Classes\Page::getContent("location-".$this->location_id.".md");
    }

    public function parent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(LocationAddress::class, "parent_id");
    }

    public function children(){
        return $this->hasMany(LocationAddress::class, "parent_id");
    }
}

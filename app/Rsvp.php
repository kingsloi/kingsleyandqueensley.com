<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model {

    protected $fillable = ["names", "count", "answer", "email"];

    public static $rules = [
        "name" => "required",
        "count" => "required|integer",
        "answer" => "boolean"
    ];

    public function scopeComing($query)
    {
        return $query->where('answer', 1);
    }

}
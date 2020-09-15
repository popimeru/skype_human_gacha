<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GachaMachine extends Model
{
    use HasFactory;
    protected $table = "gacha_machine";
    protected $fillable = [
        'name',
        'enable_flag',
    ];

    public function gachaCapsule(){
        return $this->hasMany("App\Models\GachaCapsule");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GachaCapsule extends Model
{
    use HasFactory;
    protected $table = "gacha_capsule";
    protected $fillable = [
        'gacha_machine_id',
        'skype_id',
        'name',
        'comment',
    ];

    public function gachaMachine()
    {
        return $this->belongsTo("GachaMachine");
    }
}

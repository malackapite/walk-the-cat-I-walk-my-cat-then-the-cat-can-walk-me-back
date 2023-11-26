<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sus extends Model
{
    use HasFactory;

    protected $primaryKey = "azon";
    protected $fillable = [
        'azon',
        'megnevezes'
    ];
    public $incrementing = false;

    public function suses(){
        return $this->hasMany(Macska::class, 'azon');
    }
}

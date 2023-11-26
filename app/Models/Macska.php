<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Macska extends Model
{
    use HasFactory;

    protected $fillable = [
        'nev',
        'szul',
        'sus_id'
    ];
    public function macskas(){
        return $this->belongsTo(Sus::class, 'azon');
    }
}

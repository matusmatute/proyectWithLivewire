<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'developer', 'release_date', 'console_id'];


    public function console(){
        return $this->belongsTo(Console::class);
    }

    public function metadata(){
        
        return $this->hasOne(Metadata::class);
    }

}

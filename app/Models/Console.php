<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'manufacturer', 'release_date'];

    public function games(){
        return $this->hasMany(Game::class);
    }

    public function user(){
        return $this->belongsTo(User::class);

    }

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
    use HasFactory;

    protected $fillable = ['game_id', 'user_id', 'rating', 'comment'];

    public function game(){

        return $this->belongsTo(Game::class);
    }
}

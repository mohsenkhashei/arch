<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $title
 * @property mixed $description
 */
class Boards extends Model
{
    use HasFactory;
    protected $table = 'boards';

    protected $fillable = ['title', 'description'];

    public function stories()
    {
        return $this->hasMany(Story::class, 'board_id', 'id');
    }

}

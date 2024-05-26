<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property mixed $board_id
 * @property mixed|string $filename
 * @property mixed|string $filepath
 * @property mixed $caption
 */
class Story extends Model
{

    use HasFactory;

    protected $table = 'stories';
    protected $fillable = ['caption', 'filename', 'filepath', 'board_id'];

    public function board(): BelongsTo
    {
        return $this->belongsTo(Boards::class, 'id', 'board_id');
    }
}

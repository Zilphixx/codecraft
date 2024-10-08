<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CommunityPostAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'original_name',
        'name',
        'path'
    ];

    public function communityPost(): BelongsTo
    {
        return $this->belongsTo(CommunityPost::class);
    }

    public function temporaryDelete(): HasOne
    {
        return $this->hasOne(TemporaryDelete::class);
    }
}

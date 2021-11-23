<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasSlug;
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'episode_id',
        'title',
        'body',
        'is_discussion',
        'published_at'
    ];

    protected $dates = ['created_at', 'updated_at', 'published_at'];

    protected $casts = [
        'is_discussion' => 'boolean',
        'published_at' => 'datetime'
    ];

    public function getIsDraftAttribute(): bool
    {
        return !$this->published_at || $this->published_at->isPast();
    }

    public function episode(): BelongsTo
    {
        return $this->belongsTo(Episode::class, 'episode_id');
    }

    public function newser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

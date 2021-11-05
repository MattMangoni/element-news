<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Episode extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'scheduled_for'];

    protected $casts = [
        'scheduled_for' => 'immutable_datetime:d/m/Y'
    ];

    public function news(): HasMany
    {
        return $this->hasMany(News::class);
    }
}

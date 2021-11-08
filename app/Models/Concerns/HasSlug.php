<?php

namespace App\Models\Concerns;

use Illuminate\Support\Str;

trait HasSlug
{
    public static function bootHasSlug(): void
    {
        static::creating(fn (self $model) => $model->slug = Str::slug($model->title));
    }
}

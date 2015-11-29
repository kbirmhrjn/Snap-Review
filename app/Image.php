<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
                        'caption',
                        'path',
                        'thumbnail_path',
                        'imageable_type',
                        'imageable_id',
                        'type',
    ];

    /**
     * Get all owning imageable models
     * @return MorphTo
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name','slug','taggable_id','taggable_type'];

    /**
     * Get all owning taggables models
     * @return MorphTo
     */
    public function taggable()
    {
         return $this->morphTo();
    }
}

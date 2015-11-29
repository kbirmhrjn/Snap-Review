<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['description','rating','user_id','business_id'];

    /**
     * A Review is set by the user
     * @return  BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Review is done for a business
     * @return BelongsTo
     */
    public function business()
    {
        return $this->belongsTo(Business::class, 'business_id');
    }
}

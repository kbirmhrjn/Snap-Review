<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table = 'business';

    protected $fillable = [
                            'title',
                            'address1',
                            'address2',
                            'city',
                            'state',
                            'postal_code',
                            'zipcode',
                            'phone',
                            'website',
                            'hours',
                            'closed',
                            ];

    protected $casts = [
        'hours' => 'array',
    ];

    /**
     * Business can have many owners
     * @return  BelongsToMany
     */
    public function owners()
    {
        return $this->belongsToMany(User::class, 'business_user', 'business_id', 'user_id')
                ->withTimestamps()->withPivot(['role']);
    }

    /**
     * A Business can have many reviews
     * @return  HasMany
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    /**
     * Business belongs to a category
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * A Business has many images
     * @return morphMany
     */
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}

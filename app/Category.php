<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name'
    ];

    /**
     * Get the phone record associated with the user.
     */
    public function ideas()
    {
        return $this->belongsToMany(Idea::class);
    }
}

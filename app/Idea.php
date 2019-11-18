<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $table = 'ideas';

    // protected $hidden = [ 'session_id' ];

    protected $fillable = [
        'text'
    ];

    /**
     * Get the phone record associated with the user.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}

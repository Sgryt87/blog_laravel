<?php

namespace App;

use Illuminate\Database\Eloquent\Model; // laravel\framework\src\Ill....

class Post extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}

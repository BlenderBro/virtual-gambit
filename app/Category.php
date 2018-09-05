<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\Request;

class Category extends Model
{
    protected $table = 'categories';

    public function product(Request $request)
    {
        return $this->belongsToMany('\App\Product');
    }
}

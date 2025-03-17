<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'IdCategory'; 

    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_category', 'IdCategory', 'IdService');
    }
}

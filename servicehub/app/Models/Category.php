<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_category', 'IdCategory', 'IdService');
    }
}

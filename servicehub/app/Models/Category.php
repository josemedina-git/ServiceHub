<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'IdCategory'; // Especifica la columna correcta
    
    // Si tu tabla no sigue la convención de nombres plurales en inglés
    protected $table = 'categories'; // Asegúrate que coincida con tu tabla en BD

    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_category', 'IdCategory', 'IdService');
    }
}
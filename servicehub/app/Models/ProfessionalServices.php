<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;


class ProfessionalServices extends Model
{
    protected $table = 'professional_service';

    // Relación con la tabla 'services'
    public function service()
    {
        return $this->belongsTo(Service::class, 'IdService', 'IdService');
    }
}


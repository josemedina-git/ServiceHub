<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionalService extends Model
{
    use HasFactory;

    protected $table = 'professional_service';
    protected $primaryKey = 'IdProfessionalService';

    public function professional()
    {
        return $this->belongsTo(Professional::class, 'IdProfessional');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'IdService');
    }
}

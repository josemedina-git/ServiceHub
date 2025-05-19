<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $primaryKey = 'IdService';
    public $timestamps = true;

    protected $fillable = ['NameService', 'Description'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'service_category', 'IdService', 'IdCategory');
    }

    public function professionalServices()
    {
        return $this->hasMany(ProfessionalService::class, 'IdService');
    }
}
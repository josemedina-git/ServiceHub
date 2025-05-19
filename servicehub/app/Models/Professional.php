<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Professional extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'professionals';
    protected $primaryKey = 'IdProfessional'; 

    protected $fillable = [
        'FirstName',
        'LastName',
        'CURP',
        'RFC',
        'Experience',
        'Availability',
        'Email',
        'Password',
    ];
    
    protected $hidden = [
        'Password',
        'remember_token',
    ];

    protected $casts = [
        'Password' => 'hashed', // Asegura que la contraseña siempre se encripta
    ];

    public function getAuthPassword()
    {
        return $this->Password;
    }
}
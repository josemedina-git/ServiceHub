<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'clients';
    protected $primaryKey = 'IdClient';

    protected $fillable = [
        'FirstName',
        'LastName',
        'Email',
        'PhoneNumber',
        'Password',
    ];

    protected $hidden = [
        'Password',
    ];

    protected $casts = [
        'Password' => 'hashed', // Asegura que la contraseña siempre se encripte
    ];

    public function getAuthPassword()
    {
        return $this->Password;
    }

    public function agendas()
    {
        return $this->hasMany(Agenda::class, 'IdClient');
    }
}
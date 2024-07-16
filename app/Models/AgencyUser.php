<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AgencyUser extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name', 'surname', 'birthdate', 'email', 'street', 'optional_field',
        'city', 'district', 'zip_code', 'country', 'passport_number',
        'passport_expiry', 'phone', 'attachment', 'password',
    ];

    protected $hidden = [
        'password', 'remember toke',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

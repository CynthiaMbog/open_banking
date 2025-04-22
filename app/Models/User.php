<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Les attributs qui peuvent être assignés en masse.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
    ];

    /**
     * Les attributs qui doivent être cachés pour les tableaux/JSON.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Indique si le modèle doit utiliser les timestamps.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Retourne le champ mot de passe pour l’authentification.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }
}

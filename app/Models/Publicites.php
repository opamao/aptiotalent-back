<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Publicites extends Model
{
    use HasFactory, Notifiable;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'entreprise_id',
        'titre_pub',
        'description_pub',
        'type_pub',
        'url_pub',
        'date_debut',
        'date_fin',
        'prix_pub',
        'statut_pub',
        'vues_pub',
    ];

    protected $table = 'publicites';

    protected $primaryKey = 'idpub';
}

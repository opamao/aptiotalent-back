<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Company extends Model
{
    use HasFactory, Notifiable;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'libelle_company',
        'fichier_registre',
        'logo',
        'numero_registre',
        'secteur',
        'website',
        'creation_date',
        'revenu',
        'email_company',
        'phone_company',
        'fax_company',
        'facebook',
        'twitter',
        'linkedin',
        'skype',
        'whatsapp',
        'instagram',
        'description_entreprise',
        'status_company',
    ];

    protected $table = 'company';

    protected $primaryKey = 'idcompany';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Jobs extends Model
{
    use HasFactory, Notifiable;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'entreprise_id',
        'jobcategorie_id',
        'jobtype_id',
        'joblevel_id',
        'jobexperience_id',
        'jobqualification_id',
        'libelle',
        'description',
        'salaire_min',
        'salaire_max',
        'date_expire',
        'adresse',
        'pays',
        'ville',
    ];

    protected $table = 'jobs';

    protected $primaryKey = 'idjob';
}

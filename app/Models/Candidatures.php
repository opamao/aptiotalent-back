<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Candidatures extends Model
{
    use HasFactory, Notifiable;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'candidat_id',
        'job_id',
        'notes',
        'status_cadidature',
    ];

    protected $table = 'candidatures';

    protected $primaryKey = 'idcandidature';
}

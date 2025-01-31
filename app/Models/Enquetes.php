<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Enquetes extends Model
{
    use HasFactory, Notifiable;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'question',
        'reponse',
        'candidat_id',
        'entreprise_id',
    ];

    protected $table = 'enquete_company';

    protected $primaryKey = 'idenquete';
}

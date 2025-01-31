<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Galleries extends Model
{
    use HasFactory, Notifiable;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'entreprise_id',
        'gallerie',
    ];

    protected $table = 'gallerie_company';

    protected $primaryKey = 'idgallerie';
}

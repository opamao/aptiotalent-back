<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Terms extends Model
{
    use HasFactory, Notifiable;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'description',
    ];

    protected $table = 'terms';

    protected $primaryKey = 'idterm';
}

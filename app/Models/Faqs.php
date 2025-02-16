<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Faqs extends Model
{
    use HasFactory, Notifiable;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'questions',
        'answers',
        'categories',
    ];

    protected $table = 'faqs';

    protected $primaryKey = 'idfaq';
}

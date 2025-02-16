<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class TagsBlog extends Model
{
    use HasFactory, Notifiable;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'libelle_tag',
        'answers',
        'status_tag',
    ];

    protected $table = 'tags_blogs';

    protected $primaryKey = 'idtag_blog';
}

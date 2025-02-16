<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CategorieBlog extends Model
{
    use HasFactory, Notifiable;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'libelle_categorie',
        'status_categorie',
    ];

    protected $table = 'categories_blogs';

    protected $primaryKey = 'idcategorie_blog';
}

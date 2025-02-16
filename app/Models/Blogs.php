<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Blogs extends Model
{
    use HasFactory, Notifiable;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'tag_id',
        'categorie_id',
        'libelle_blog',
        'description_blog',
        'image_blog',
        'status_blog',
        'like_blog',
        'share_blog',
    ];

    protected $table = 'blogs';

    protected $primaryKey = 'idblog';
}

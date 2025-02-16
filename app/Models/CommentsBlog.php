<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CommentsBlog extends Model
{
    use HasFactory, Notifiable;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'review',
        'comment',
        'status_comment',
        'blog_id',
    ];

    protected $table = 'comments_blogs';

    protected $primaryKey = 'idcomment_blog';
}

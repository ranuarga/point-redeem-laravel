<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $primaryKey = 'comment_id';

    protected $fillable = [
        'article_id',
        'user_id',
        'comment'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function article(){
        return $this->belongsTo(Article::class, 'article_id', 'article_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $primaryKey = 'article_id';

    protected $fillable = [
        'article_title',
        'article_content',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function comment(){
        return $this->hasMany(Comment::class, 'article_id', 'article_id');
    }
}

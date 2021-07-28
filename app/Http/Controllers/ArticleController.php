<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;

class ArticleController extends Controller
{
    public function index()
    {
        $data = [
            'articles' => Article::all(),
        ];
        return view('admin.article.index', $data);
    }

    public function articleComment($id)
    {
        $comments = Comment::where('article_id', $id)->orderBy('created_at', 'asc')->get();
        $article = Article::findOrFail($id);
        return view(
            'admin.article.comment',
            [
                'article' => $article,
                'comments' => $comments,
            ]
        );
    }
}

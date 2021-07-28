<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MemberArticleController extends Controller
{
    public function index()
    {
        $data = [
            'articles' => Article::where('user_id', Auth::user()->user_id)->orderBy('created_at', 'asc')->get()
        ];
        return view('member.my-article.index', $data);
    }

    public function create()
    {
        return view('member.my-article.createOrUpdate');
    }

    public function storeWeb(Request $request)
    {
        try {            
            $article = Article::create([
                'article_title' => $request->article_title,
                'article_content' => $request->article_content,
                'user_id' => Auth::user()->user_id,
            ]);

            $user = User::find(Auth::user()->user_id);
            $user->user_point += 10;
            $user->save();
            $user->point_history()->create(['activity_id' => 2]);

            return redirect()->route('my-article');
        } catch (\Exception $ex) {
            print_r($ex->getMessage());
        }
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('member.my-article.createOrUpdate', ['article' => $article]);
    }

    public function updateWeb($id, Request $request)
    {
        try {
            $article = Article::findOrFail($id);
            $article->article_title = $request->article_title;
            $article->article_content = $request->article_content;
            $article->user_id = Auth::user()->user_id;
            
            return redirect()->route('my-article');
        } catch (\Exception $ex) {
            print_r($ex->getMessage());
        }
    }

    public function destroy($id)
    {
        Article::findOrFail($id)->delete();

        return redirect()->route('my-article');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('member.article', [
            'article' => $article,
            'comments' => Comment::where('article_id', $article->article_id)->orderBy('created_at', 'asc')->get()
        ]);
    }

    public function writeComment(Request $request, $article_id)
    {
        $request->validate([
            'comment' => 'required'
        ]);

        $comment = Comment::create([
            'article_id' => $article_id,
            'user_id' => Auth::user()->user_id,
            'comment' => $request->comment
        ]);

        if($comment){
            $user = User::find(Auth::user()->user_id);
            $user->user_point += 1;
            $user->save();
            $user->point_history()->create(['activity_id' => 3]);
        }

        return back();
    }
}

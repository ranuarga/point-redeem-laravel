<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'articles' => Article::orderBy('created_at', 'desc')->get()
        ];
    
        return view('member.home', $data);
    }
}

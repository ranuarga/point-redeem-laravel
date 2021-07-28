<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Article;
use App\Models\Reward;
use App\Models\RewardHistory;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        return view('admin.dashboard', [
            'count_member' => User::all()->count(),
            'count_article' => Article::all()->count(),
            'count_reward' => Reward::all()->count(),
            'count_redeem_request' => RewardHistory::all()->count(),
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PointHistory;
use App\Models\RewardHistory;

class MemberHistoryController extends Controller
{
    public function pointHistory()
    {
        $point_histories = PointHistory::where('user_id', Auth::user()->user_id)->orderBy('created_at', 'asc')->get();
        return view(
            'member.point-history',
            [
                'point_histories' => $point_histories,
            ]
        );
    }

    public function rewardHistory()
    {
        $redeem_requests = RewardHistory::where('user_id', Auth::user()->user_id)->orderBy('created_at', 'asc')->get();
        return view(
            'member.reward-history',
            [
                'redeem_requests' => $redeem_requests
            ]
        );
    }
}

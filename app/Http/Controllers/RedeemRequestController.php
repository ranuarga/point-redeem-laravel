<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RewardHistory;

class RedeemRequestController extends Controller
{
    public function index()
    {
        $data = [
            'redeem_requests' => RewardHistory::all(),
        ];
        return view('admin.redeem-request.index', $data);
    }

    public function accept($id)
    {
        $redeem_request = RewardHistory::findOrFail($id);
        $redeem_request->reward_status = 1;
        $redeem_request->save();
        return redirect('admin/redeem-request');
    }

    public function deny($id)
    {
        $redeem_request = RewardHistory::findOrFail($id);
        $redeem_request->reward_status = 2;
        $redeem_request->save();
        return redirect('admin/redeem-request');
    }
}

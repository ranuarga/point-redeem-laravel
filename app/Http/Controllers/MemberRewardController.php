<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Reward;

class MemberRewardController extends Controller
{
    public function index()
    {
        $data = [
            'rewards' => Reward::get()
        ];
        if(Auth::guard('member')->check()){
            $data['member'] = User::findOrFail(Auth::user()->user_id);
        }
        return view('member.reward', $data);
    }

    public function redeem($id){
        $reward = Reward::findOrFail($id);
        $user = User::find(Auth::user()->user_id);
        if($user->user_point >= $reward->reward_cost){
            if($user->user_verified == 0){
                return redirect('reward')->with('error', 'Lengkapi alamat dan nomor HP dahulu');
            }
            $user->user_point -= $reward->reward_cost;
            $user->user_point += 7;
            $user->point_history()->create(['activity_id' => 5]);
            $user->save();
            $user->reward_history()->create([
                'reward_id' => $reward->reward_id
            ]);
            return redirect('reward')->with('success', 'Reward akan diproses dan dikirimkan sesuai data diri');
        }else{
            return back()->with('error', 'Poin tidak cukup');
        }
    }
}

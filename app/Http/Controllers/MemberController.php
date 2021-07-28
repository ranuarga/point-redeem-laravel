<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\PointHistory;

class MemberController extends Controller
{
    public function index()
    {
        $data = [
            'members' => User::all(),
        ];
        return view('admin.member.index', $data);
    }

    public function pointHistory($id)
    {
        $point_histories = PointHistory::where('user_id', $id)->orderBy('created_at', 'asc')->get();
        $member = User::findOrFail($id);
        return view(
            'admin.member.point-history',
            [
                'member' => $member,
                'point_histories' => $point_histories,
            ]
        );
    }

    public function myAccount()
    {
        $member = User::findOrFail(Auth::user()->user_id);

        return view('member.account', ['member' => $member]);
    }

    public function updateMyAccount(Request $request)
    {
        $member = User::findOrFail(Auth::user()->user_id);

        $member->user_name = $request->user_name;
        $member->user_email = $request->user_email;
        $member->user_phone = $request->user_phone;
        $member->user_address = $request->user_address;
        if($member->user_verified == 0){
            $member->user_verified = 1;
            $member->user_point += 5;
            $member->point_history()->create(['activity_id' => 4]);
        }
        $member->save(); 
        return redirect('my-account')->with('success', 'Data berhasil diperbarui');
    }

}

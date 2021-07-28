<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
}

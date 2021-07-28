<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class MemberActivityController extends Controller
{
    public function index(){
        $data = [
            'activities' => Activity::all()
        ];
        return view('member.activity', $data);
    }
}

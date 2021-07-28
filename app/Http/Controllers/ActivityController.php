<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function index()
    {
        $data = [
            'activities' => Activity::all(),
        ];
        return view('admin.activity', $data);
    }
}

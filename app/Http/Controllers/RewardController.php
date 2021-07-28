<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reward;

class RewardController extends Controller
{
    public function index()
    {
        $data = [
            'rewards' => Reward::all(),
        ];
        return view('admin.reward.index', $data);
    }

    public function create()
    {
        return view('admin.reward.createOrUpdate');
    }

    public function storeWeb(Request $request)
    {
        try {            
            $reward = Reward::create([
                'reward_title' => $request->reward_title,
                'reward_description' => $request->reward_description,
                'reward_cost' => $request->reward_cost,
            ]);

            return redirect()->route('admin.reward');
        } catch (\Exception $ex) {
            print_r($ex->getMessage());
        }
    }

    public function edit($id)
    {
        $reward = Reward::findOrFail($id);

        return view('admin.reward.createOrUpdate', ['reward' => $reward]);
    }

    public function updateWeb($id, Request $request)
    {
        try {
            $reward = Reward::findOrFail($id);
            $reward->update($request->all());
            
            return redirect()->route('admin.reward');
        } catch (\Exception $ex) {
            print_r($ex->getMessage());
        }
    }

    public function destroy($id)
    {
        Reward::findOrFail($id)->delete();

        return redirect()->route('admin.reward');
    }
}

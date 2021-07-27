<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    use HasFactory;

    protected $table = 'rewards';
    protected $primaryKey = 'reward_id';

    protected $fillable = [
        'reward_title',
        'reward_description',
        'reward_cost'
    ];

    public function history(){
        return $this->hasMany(RewardHistory::class, 'reward_id', 'reward_id');
    }
}

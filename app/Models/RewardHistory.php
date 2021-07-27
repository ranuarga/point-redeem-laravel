<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RewardHistory extends Model
{
    use HasFactory;

    protected $table = 'reward_histories';
    protected $primaryKey = 'reward_history_id';

    protected $fillable = [
        'user_id',
        'reward_id',
        'reward_status'
    ];

    public function reward(){
        return $this->belongsTo(Rewards::class, 'reward_id', 'reward_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}

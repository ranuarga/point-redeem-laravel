<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointHistory extends Model
{
    use HasFactory;

    protected $table = 'point_histories';
    protected $primaryKey = 'point_history_id';

    protected $fillable = [
        'user_id',
        'activity_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function activity(){
        return $this->belongsTo(Activity::class, 'activity_id', 'activity_id');
    }
}

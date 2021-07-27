<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $guard = 'admin';
    protected $table = 'admins';
    protected $primaryKey = 'admin_id';

    protected $fillable = [
        'admin_name',
        'admin_email',
        'admin_password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'admin_password'
    ];

    public function getAuthPassword()
    {
        return $this->admin_password;
    }
}

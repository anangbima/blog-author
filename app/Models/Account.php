<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $primaryKey = 'username';
    protected $table = 'account';
    protected $guarded = ['username'];

    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    protected $fillable = [
        'name',
        'username',
        'password',
        'role',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}

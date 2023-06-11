<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SosialAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'provider_id',
        'provider_name'
    ];

    // SETIAP SOSIAL ACCUNT MEMPUNYA SATU USER
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

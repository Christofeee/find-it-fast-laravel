<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $fillable = ['message', 'customer_id', 'is_admin'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

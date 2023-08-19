<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Todo extends Model
{
    use HasFactory;
    protected $table = "todos";
    protected $fillable = [
        'user_id','type','description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeUserTodos($query)
    {
        return $query->where('user_id',Auth::user()->id);
    }
}

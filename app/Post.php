<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer'
    ];

    protected $hidden = ['pivot'];

    public static $rules = [
        'body' => 'required'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeGetAll($scope)
    {
        return $scope->get()->filter(function ($item) {
            return $item->user_id == auth()->id();
        });
    }
}

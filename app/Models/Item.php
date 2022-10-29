<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'activity_id',
        'status',
    ];

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}

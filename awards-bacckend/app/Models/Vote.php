<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'nominee_id'];

    // علاقة مع Nominee
    public function nominee()
    {
        return $this->belongsTo(Nominee::class);
}
}
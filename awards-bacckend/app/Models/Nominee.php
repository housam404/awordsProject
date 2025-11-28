<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nominee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'image'];

    // علاقة مع Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // علاقة مع Votes
    public function votes()
    {
        return $this->hasMany(Vote::class);
}
}
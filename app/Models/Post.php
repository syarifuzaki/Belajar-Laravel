<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'slug',
      'description',
      'cover',
      'category_id',
    ];

    protected $casts = [
      'category_id' => 'int',
    ];

    public function category()
    {
      return $this->belongsTo(Category::class, 'category_id');
    }
}

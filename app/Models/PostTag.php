<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;

    protected $fillable = [
      'post_id',
      'tag_id',
    ];

    protected $casts = [
      'post_id' => 'int',
      'tag_id' => 'int',
    ];

    public function post()
    {
      return $this->belongsTo(Post::class, 'post_id');
    }

    public function tag()
    {
      return $this->hasMany(Tag::class, 'tag_id');
    }
}

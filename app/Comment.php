<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
protected $fillable = [
    'body',
    'post_id',
    'username'
];    
    
   public function post()
{
    return $this->belongsTo('App\Post');
} //
public function getByComment(int $limit_count = 10)
{
     return $this->with('post')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}

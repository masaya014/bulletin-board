<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
protected $fillable = [
    'title',
    'body',
    'username'
];

public function getPaginateByLimit(int $limit_count = 10)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}//

public function comments()   
{
    return $this->hasMany('App\Comment');  //紐づけるための関数
}

public function getByPost(int $limit_count = 5)
{
     return $this->comments()->with('post')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}
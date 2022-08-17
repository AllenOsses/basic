<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
    return $this->belongsTo(User::class);
}

public function getGetExcerptAttribute(){
    return substr($this->body, 0, 140);
}

}




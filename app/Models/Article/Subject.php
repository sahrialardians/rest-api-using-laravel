<?php

namespace App\Models\Article;

use App\Models\Article\Article;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    // Setiap subject mempunyai banyak article
    public function articles()
    {
        return $this->hasMany(Article::class );
    }
}

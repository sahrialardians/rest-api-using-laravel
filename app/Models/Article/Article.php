<?php

namespace App\Models\Article;

use App\Models\User;
use App\Models\Article\Subject;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'slug', 'body', 'subject_id'];

    // setiap article dipunyai satu user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // setiap article dipunyai satu subject
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}

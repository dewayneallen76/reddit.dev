<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends BaseModel
{
	protected $table = 'posts';

	public function user()
	{
		return $this->belongsTo('App\User', 'created_by', 'id');
	}

	public static function searchPosts($searchTerm)
	{
		return self::where('title', 'LIKE' , '%' . $searchTerm . '%')
					->orWhere('content', 'LIKE', '%' . $searchTerm . '%');
	}

	public function votes()
    {
        return $this->hasMany(Vote::class);
    }

	public function upvotes()
    {
        return $this->votes()->where('vote', '=', 1);
    }
    public function downvotes()
    {
        return $this->votes()->where('vote', '=', 0);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 *
 * @method static create(array $all)
 */
class Article extends Model
{
    protected $fillable = ['index', 'image', 'title', 'date', 'name', 'place1', 'place2'];

    public function scopeSearch($query, ?string $word)  {
        if (!is_null($word)) {
            return $query
                ->where('title', 'like', '%' . $word . '%')
                ->orwhere('date', 'like', '%' . $word . '%')
                ->orwhere('name', 'like', '%' . $word . '%')
                ->orwhere('place1', 'like', '%' . $word . '%')
                ->orwhere('place2', 'like', '%' . $word . '%');
        }
        return $query;
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $all)
 */
class Article extends Model
{
    protected $fillable = ['show', 'image', 'title', 'date', 'name', 'place1', 'place2'];
}

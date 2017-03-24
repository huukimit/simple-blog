<?php
/**
 * Created by PhpStorm.
 * User: FRAMGIA\nguyen.huu.kim
 * Date: 24/03/2017
 * Time: 08:28
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'description'];

    /**
     * Get list of all posts of category
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: FRAMGIA\nguyen.huu.kim
 * Date: 24/03/2017
 * Time: 08:28
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title', 'content', 'category_id', 'user_id'];

    /**
     * Get a category of post
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * Get an user who created this post
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

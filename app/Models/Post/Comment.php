<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

  protected $table = "comments";

  protected $fillable = [
      'comment','user_id','post_id'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [''];
}

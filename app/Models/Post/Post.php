<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

  protected $table = "posts";

  protected $fillable = [
      'title', 'description','user_id'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [''];

}

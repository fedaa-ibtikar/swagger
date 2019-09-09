<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     description="Post Model",
 *     title="Post Model",
 *     required={"title", "brief"},
 *      @OA\Property(property="title",type="string", description="title of post bla bla"),
 *      @OA\Property(property="brief",type="text", description="brief of post bla bla"),
 * )
 */
class Post extends Model
{
    protected $guarded = [];
}

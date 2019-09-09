<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/posts",
     *      operationId="getListOfPosts",
     *      tags={"posts"},
     *      summary="Get list of posts",
     *      description="Returns list of posts",
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *       @OA\Response(response=400, description="Bad request"),
     *       security={
     *           {"api_key_security_example": {}}
     *       }
     *     )
     *
     * Returns list of projects
     */
    public function index()
    {
        // response does not has any format yet ! just testing swagger
        return response()->json(['data' => Post::all()]);
    }

    /**
     * @OA\Post(
     *      path="/api/posts",
     *      operationId="storePost",
     *      tags={"posts"},
     *      summary="Save Post To Database",
     *      description="Save Post",
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *       @OA\Response(response=400, description="Bad request"),
     *       security={
     *           {"api_key_security_example": {}}
     *       },
     *      @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="title",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="brief",
     *                     type="string"
     *                 ),
     *             )
     *         )
     *     ),
     *     )
     *
     * Returns list of projects
     */
    public function store(Request $request)
    {
        // response does not has any format yet ! just testing swagger
        // no validation
        // testing only!
        $post = Post::create($request->all());

        return response()->json(['data' => $post], 201);
    }
}

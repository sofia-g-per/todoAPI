<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function showTags() {

        $tags = Tag::all();

        return response()->json([
            'tags' => $tags
        ]);
    }

    public function showTag($id) {
        $tag = Tag::find($id);
        $tag->tasks =  $tag->tasks;

        return response()->json([
            'tag' => $tag,
        ]);
    }
}

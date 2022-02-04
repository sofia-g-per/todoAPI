<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function addTag(Request $request) {
        
        $validator = Validator::make( $request->all(), [
            'name' => 'required|unique:tags',
        ]);

        if($validator->fails()) {
            return response()->json([
                "errors"=> $validator->errors(),
            ]);
        }

        $tag = new Tag;
        $tag->name = $request->name;
        $tag->save();

        return response()->json([
            "tag" => $tag,
        ]);
    }
}

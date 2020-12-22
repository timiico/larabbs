<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Category $category,Topic $topic,Request $request)
    {
        $topics = $topic->WithOrder($request->order)->where('category_id',$category->id)->with('user','category')->paginate(20);

        return view('topics.index',compact('topics','category'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class StaticPagesController extends Controller
{
    public function root()
    {
        return view('pages.root');
    }
}

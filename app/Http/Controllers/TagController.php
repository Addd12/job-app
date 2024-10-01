<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag){
        return view('results', ['jobs' => $tag->jobs]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Resources\TagResource;
use Spatie\Tags\Tag;

class TagsController extends Controller
{
    public function index()
    {
        return TagResource::collection(Tag::all());
    }

}

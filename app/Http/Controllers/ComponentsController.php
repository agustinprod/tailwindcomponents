<?php

namespace App\Http\Controllers;

use App\AnonymousUser;
use App\Component;
use App\Http\Resources\ComponentResource;

class ComponentsController extends Controller
{
    public function index()
    {
        return ComponentResource::collection($this->filterComponentsByQuery());
    }

    public function show(Component $component)
    {
        return ComponentResource::make($component);
    }

    public function store()
    {
        $data = $this->validate(request(), [
            'name' => 'required',
            'html' => 'required',
            'description' => 'nullable',
            'author' => 'nullable',
            'tags' => 'array'
        ]);

        $component = Component::create([
            'name' => $data['name'],
            'description' => $data['description'] ?? '',
            'html' => $data['html'],
            'author' => $this->getAuthor(request()),
            'tags' => $data['tags'] ?? [],
        ]);

        return ComponentResource::make($component);
    }

    private function getAuthor($request)
    {
        if (auth()->check()) {
            return auth()->user();
        }

        return AnonymousUser::create([
            'name' => request('username', 'anonymous')
        ]);
    }

    private function filterComponentsByQuery()
    {
        return Component::where('approved', true)
            ->orderBy('id', 'desc')
            ->when(request('tag'), function($components) {
                $components->whereHas('tags', function($tags) {
                    //sqlite doesnt support json fields
                    if (\DB::connection()->getDriverName() === 'sqlite') {
                        $tags->where('slug', 'like', '%"' . request('tag') . '"%');
                    } else {
                        $tags->where('slug->en', request('tag'));
                    }
                });
            })
            ->when(request('q'), function($components) {
                $components->where(function($components) {
                    $query = request('q');
                    $components->where('name', 'like', "%{$query}%");
                    $components->orWhere('description', 'like', "%{$query}%");
                });
            })
            ->paginate(6);
    }
}

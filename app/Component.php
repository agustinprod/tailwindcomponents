<?php

namespace App;

use App\Events\ComponentCreated;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Tags\HasTags;

/**
 * App\Component
 *
 * @property \Illuminate\Database\Eloquent\Model|\Eloquent $author
 * @property \Illuminate\Database\Eloquent\Collection|\Spatie\Tags\Tag[] $tags
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Component withAllTags($tags, $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Component withAnyTags($tags, $type = null)
 * @mixin \Eloquent
 */
class Component extends Model
{
    use HasSlug, HasTags;

    protected $guarded = [];
    protected $dispatchesEvents = [
        'created' => ComponentCreated::class
    ];

    public function author()
    {
        return $this->morphTo();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function setAuthorAttribute(Model $user)
    {
        $this->author()->associate($user);
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}

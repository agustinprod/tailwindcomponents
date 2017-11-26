<?php

namespace Tests\Feature;

use Spatie\Tags\Tag;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TagsTest extends TestCase
{
    use RefreshDatabase;

    public function test_returns_all_tags()
    {
        Tag::findOrCreate('Button');
        Tag::findOrCreate('Form');

        $response = $this->get('api/tags');

        $response->assertStatus(200);

        $response->assertJson([
            'data' => [
                ['name' => 'Button','slug' => 'button'],
                ['name' => 'Form','slug' => 'form'],
            ]
        ]);
    }
}

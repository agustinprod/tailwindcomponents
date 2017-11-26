<?php

namespace Tests\Feature;

use App\Component;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ListComponentsTest extends TestCase
{
    use RefreshDatabase;


    public function test_doesnt_return_not_approved_components()
    {
        $component = factory(Component::class)->states('unapproved')->create();

        $response = $this->getJson('/api/components');

        $response->assertStatus(200);

        $response->assertJsonCount(0, 'data');
    }


    public function test_filters_component_by_tag()
    {
        $component = factory(Component::class)->create(['tags' => ['show']]);
        factory(Component::class)->create(['tags' => ['not-show']]);

        $response = $this->getJson('/api/components?' . http_build_query(['tag' => 'show']));

        $response->assertStatus(200);

        $response->assertJson([
            'data' => [
                [
                    'slug' => $component->slug,
                ]
            ]
        ]);

        $response->assertJsonCount(1, 'data');
    }

    public function test_returns_a_component()
    {
        $component = factory(Component::class)->create();

        $response = $this->getJson('/api/components/' . $component->slug);

        $response->assertStatus(200);

        $response->assertJson([
            'data' => ['name' => $component->name]
        ]);
    }
}

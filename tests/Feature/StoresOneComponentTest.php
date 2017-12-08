<?php

namespace Tests\Feature;

use App\Component;
use App\Mail\ComponentSubmittedMail;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StoresOneComponentTest extends TestCase
{
    use RefreshDatabase;

    public function test_validates_input()
    {
        $response = $this->postJson('/api/components', []);

        $response->assertStatus(422);

        $response->assertJsonValidationErrors(['name', 'html']);

        $this->assertDatabaseMissing('components', []);

    }

    public function test_stores_a_valid_component_as_anonymous()
    {
        $response = $this->postJson('/api/components', $this->validComponentData());

        $response->assertStatus(201);

        $this->assertDatabaseHas('components', [
            'html' => '<div class="inline-flex rounded"></div>',
            'name' => 'Name',
            'slug' => 'name',
            'description' => 'Description',
            'approved' => false,
        ]);

        $this->assertDatabaseHas('anonymous_users', [
            'name' => 'anonymous',
        ]);

        $component = Component::first();

        $this->assertCount(3, $component->tags);

    }

    public function test_store_logged_user_as_author()
    {
        $user = $this->beSomeone();

        $response = $this->postJson('/api/components', $this->validComponentData());

        $response->assertStatus(201);

        $this->assertDatabaseHas('components', [
            'html' => '<div class="inline-flex rounded"></div>',
            'name' => 'Name',
            'description' => 'Description',
            'approved' => false,
            'author_type' => User::class,
            'author_id' => $user->id,
        ]);
    }

    public function test_it_fires_an_email()
    {
        \Mail::fake();

        $this->postJson('/api/components', $this->validComponentData());

        \Mail::assertSent(ComponentSubmittedMail::class, function($mail) {
            $mail->hasTo(config('mail.notifications'));

            return $mail;
        });
    }

    /**
     * @return array
     */
    private function validComponentData($overrides = [])
    {
        return array_merge([
            'name'        => 'Name',
            'description' => 'Description',
            'html'        => '<div class="inline-flex rounded"></div>',
            'tags' => ['form', 'input', 'button']
        ], $overrides);
    }

}

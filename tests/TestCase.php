<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function beSomeone($overrides = [])
    {
        $user = factory(User::class)->create($overrides);

        $this->actingAs($user);

        return $user;
    }
}

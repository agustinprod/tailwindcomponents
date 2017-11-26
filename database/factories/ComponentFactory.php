<?php

use App\Component;
use App\User;
use Faker\Generator as Faker;

$factory->define(Component::class, function (Faker $faker) {
    return [
        'name' => 'Component name',
        'description' => 'Component description',
        'html' => '<div class="flex"></div>',
        'approved' => true,
        'author_id' => function() { return factory(User::class)->create()->id; },
        'author_type' => User::class
    ];
});

$factory->state(Component::class, 'unapproved', function (Faker $faker) {
    return [
        'approved' => false
    ];
});

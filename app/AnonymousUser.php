<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\AnonymousUser
 *
 * @mixin \Eloquent
 */
class AnonymousUser extends Model
{
    protected $table = 'anonymous_users';
    protected $guarded = [];
}

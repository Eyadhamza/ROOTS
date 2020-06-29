<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function update(User $current_user,User $user)
    {
        return $current_user->is($user);
    }
    public function edit(User $current_user,User $user)
    {
        return $current_user->is($user);
    }




}

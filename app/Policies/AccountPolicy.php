<?php

namespace App\Policies;

use App\Models\Account;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AccountPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {

    }

    public function view(User $user, Account $account)
    {
    }

    public function create(User $user)
    {
    }

    public function update(User $user, Account $account)
    {
    }

    public function delete(User $user, Account $account)
    {
    }

    public function restore(User $user, Account $account)
    {
    }

    public function forceDelete(User $user, Account $account)
    {
    }
}

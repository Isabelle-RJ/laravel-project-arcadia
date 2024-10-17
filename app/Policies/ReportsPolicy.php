<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;

class ReportsPolicy extends Gate
{
    public function create(User $user): bool
    {
        return $user->role === 'veterinarian';
    }

    public function update(User $user): bool
    {
        return $user->role === 'veterinarian';
    }

    public function delete(User $user): bool
    {
        return $user->role === 'veterinarian';
    }

    public function view(User $user): bool
    {
        return in_array($user->role, ['veterinarian', 'admin']);
    }
}

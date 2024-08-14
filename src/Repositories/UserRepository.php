<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    private $users = [];

    public function getUserById($id): ?User
    {
        return $this->users[$id] ?? null;
    }

    public function getAllUsers(): array
    {
        return $this->users;
    }

    public function saveUser(User $user): void
    {
        $this->users[$user->getId()] = $user;
    }

    public function deleteUser($id): void
    {
        unset($this->users[$id]);
    }
}

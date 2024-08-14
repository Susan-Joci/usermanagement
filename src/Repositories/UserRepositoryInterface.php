<?php

namespace App\Repositories;

use App\Models\User;

interface UserRepositoryInterface
{
    public function getUserById($id): ?User;
    public function getAllUsers(): array;
    public function saveUser(User $user): void;
    public function deleteUser($id): void;
}

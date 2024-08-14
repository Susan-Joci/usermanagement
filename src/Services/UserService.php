<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepositoryInterface;

class UserService
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function createUser($id, $name, $email): User
    {
        $user = new User($id, $name, $email);
        $this->userRepository->saveUser($user);
        return $user;
    }

    public function getUserById($id): ?User
    {
        return $this->userRepository->getUserById($id);
    }

    public function getAllUsers(): array
    {
        return $this->userRepository->getAllUsers();
    }

    public function deleteUser($id): void
    {
        $this->userRepository->deleteUser($id);
    }
}

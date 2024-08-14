<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Models\User;
use App\Repositories\UserRepository;
use App\Services\UserService;

// Setup
$userRepository = new UserRepository();
$userService = new UserService($userRepository);

// Create a user
$userService->createUser(1, 'John Doe', 'john@example.com');
$userService->createUser(2, 'susan Doe', 'susandoe@example.com');

// Fetch and display all users
$users = $userService->getAllUsers();
foreach ($users as $user) {
    echo $user->getName() . ' (' . $user->getEmail() . ')<br>';
}

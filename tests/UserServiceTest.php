<?php

use PHPUnit\Framework\TestCase;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Services\UserService;

class UserServiceTest extends TestCase
{
    public function testCreateUser()
    {
        $userRepository = new UserRepository();
        $userService = new UserService($userRepository);

        $user = $userService->createUser(1, 'Jane Doe', 'jane@example.com');

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals('Jane Doe', $user->getName());
        $this->assertEquals('jane@example.com', $user->getEmail());
    }
}

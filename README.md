# Simple User Management System

## Overview

This is a simple User Management System built with PHP. The project includes user management functionalities like creating, retrieving, updating, and deleting users (CRUD operations). The project also utilizes PHPUnit for testing the application.

## Installation

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/yourusername/simple-user-management.git
   cd simple-user-management

2. Install Dependencies:
   ```bash
   composer install


4. Run PHPUnit Tests:
To run the tests and ensure everything is working, use:
   vendor\bin\phpunit --testdox



## Usage
```php
1. Adding a New User
To add a new user, you would typically use the UserService:

$userService = new UserService(new UserRepository());
$userService->createUser('johndoe@example.com', 'John Doe', 'password123');


2. Fetching a User by ID

$user = $userService->getUserById(1);
echo $user->getName();

3. Updating a User

$userService->updateUser(1, 'John Doe', 'newpassword456');

4. Deleting a User

$userService->deleteUser(1);



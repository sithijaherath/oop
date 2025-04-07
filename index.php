<?php
require 'autoload.php';

use App\Models\Admin;
use App\Models\RegularUser;
use App\Services\AuthService;

$admin = new Admin("Alice", "Alice@example.com", "admin123");
$user = new RegularUser("Bob", "Bob@example.com", "user123");

$authService = new AuthService();

echo $authService->authenticate($admin, "alice@example.com", "admin123") . "<br>";
echo $authService->authenticate($user, "bob@example.com", "user123") . "<br>";
echo $admin->logout();
?>
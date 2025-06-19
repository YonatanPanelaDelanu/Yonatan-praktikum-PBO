<?php
class User {
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }
}

class UserService {
    public function greet(User $user): string {
        return "Hello, " . $user->name;
    }
}

$user = new User("Rommi");
$service = new UserService();
echo $service->greet($user);
?>
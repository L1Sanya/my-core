<?php

namespace Core\src;

use Model\User;

interface AuthenticationServiceInterface
{
    public function check(): bool;
    public function getCurrentUser(): User|null;
    public function login(string $password, string $email): bool;
    public function logout(): void;

}
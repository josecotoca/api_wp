<?php

namespace App\Repositories\Interfaces;

interface IIdentityRepository {
    public function signin(string $user, string $password) : ?array;
}

<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class UserData extends Data
{
    public function __construct(
        //
        public string $username,
        public string $firstName,
        public string $lastName,
        public string $email,
        public string $password,
    ){}
}

<?php

namespace App\Data;

use App\Models\User;
use Spatie\LaravelData\Data;

class NewserData extends Data
{
    public function __construct(
        public string|null $firstName,
        public string|null $lastName,
        public string $username,
        public string $email,
    ) {}

    public static function fromModel(User $newser): self
    {
        return new self(
            firstName: $newser->first_name,
            lastName: $newser->last_name,
            username: $newser->username,
            email: $newser->email,
        );
    }
}

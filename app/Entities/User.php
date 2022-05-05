<?php

namespace App\Entities;

use App\Enums\Gender;

class User
{
    private function __construct(
        public readonly string $name,
        public readonly Gender $gender,
        public readonly string $email
    )
    {
    }

    public static function create($user): self
    {
        return new self(
            "{$user->name->first} {$user->name->last}",
            Gender::tryFrom($user->gender) ?? Gender::Etc,
            $user->email
        );
    }
}

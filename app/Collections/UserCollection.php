<?php

namespace App\Collections;

use App\Entities\User;
use Illuminate\Support\Collection;

class UserCollection
{
    public readonly Collection $collection;

    public function __construct()
    {
        $this->collection = new Collection();
    }

    public function fromResponse($response): Collection
    {
        foreach ($response->results as $result) {
            $this->collection->add(User::create($result));
        }
        return $this->collection;
    }

    public function add(User $user): Collection
    {
        $this->collection->add($user);
        return $this->collection;
    }
}

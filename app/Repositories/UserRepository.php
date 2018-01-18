<?php

namespace  App\Repositories;

use App\User;

class UserRepository extends Repository
{
    public function __construct()
    {
        $this->setModel(User::class);
    }

    public static function ageMin18Max25()
    {
        return User::where([
            ['age', '>=', 18],
            ['age', '<=', 25]
        ])->orderBy('age')->get();
    }
}

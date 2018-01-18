<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class UsersController extends Controller
{
    public function index()
    {
        return UserRepository::ageMin18Max25();
    }

    public function show($id)
    {
        return UserRepository::findOrFail($id);
    }
}

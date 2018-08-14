<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Index the users.
     *
     *
     * @return Response
     */
    public function index()
    {
        $users = $this->user->all();
        return view('users.index', ['users' => $users]);
    }
}

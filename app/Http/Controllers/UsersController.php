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
    public function index($group_id)
    {
        $users = $this->user->where('group_id', $group_id)->get();
        return view('users.index', ['users' => $users]);
    }

    /**
     * Notification to specific user.
     *
     *
     * @return Response
     */
    public function notification($id)
    {
        $user = $this->user->find($id);
        $user->notify(new \App\Notifications\CallFromReceptionist($user));
        return view('thanks');
    }
}

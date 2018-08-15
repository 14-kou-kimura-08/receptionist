<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function __construct(Group $group)
    {
        $this->group = $group;
    }

    /**
     * Index the groups.
     *
     *
     * @return Response
     */
    public function index()
    {
        $groups = $this->group->all();
        return view('groups.index', ['groups' => $groups]);
    }
}

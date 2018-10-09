<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function __construct(Member $member)
    {
        $this->member = $member;
    }

    /**
     * Index the members.
     *
     *
     * @return Response
     */
    public function index($group_id)
    {
        $members = $this->member->where('group_id', $group_id)->simplePaginate(6);
        return view('members.index', ['members' => $members]);
    }

    /**
     * Notification to Specific member.
     *
     *
     * @return Response
     */
    public function notification($id)
    {
        $member = $this->member->find($id);
        $member->notify(new \App\Notifications\CallFromReceptionist($member));
        return view('thanks');
    }

    /**
     * Notification to Corporate Group.
     *
     *
     * @return Response
     */
    public function notificationToCorporate()
    {
        $id     = $this->member->where('last_name', '木村')->value('id');
        $member = $this->member->find($id);
        $member->notify(new \App\Notifications\CallFromReceptionist($member));
        return view('thanks');
    }
}

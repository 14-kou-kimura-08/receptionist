@foreach ($groups as $group)
    <a href="{{ route('users.index', ['group_id' => $group->id]) }}">{{$group->name}}</a>
@endforeach

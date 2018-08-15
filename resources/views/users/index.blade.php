@foreach ($users as $user)
    <a href="{{ route('users.notification', ['id' => $user->id]) }}">{{$user->last_name}} {{$user->first_name}}</a>
@endforeach

@foreach ($users as $user)
    <p>{{$user->last_name}} {{$user->first_name}}<br>({{$user->last_furigana}} {{$user->first_furigana}})</p>
@endforeach

@extends('layouts.layouts')

@section('css', '/css/users.css')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                担当者の名前を教えてください
            </div>
            <div class="links">
                @foreach ($users as $user)
                    <a href="{{ route('users.notification', ['id' => $user->id]) }}">{{$user->last_name}} {{$user->first_name}}</a>
                @endforeach
            </div>
            <a href="{{ route('groups.index') }}" class="return">１つ前に戻る</a>
        </div>
    </div>
@endsection

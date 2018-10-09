@extends('layouts.layouts')

@section('css', '/css/members.css')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                担当者の名前を教えてください
            </div>
            <div class="links">
                @foreach ($members as $member)
                    <a href="{{ route('members.notification', ['id' => $member->id]) }}">{{$member->last_name}} {{$member->first_name}}</a>
                @endforeach
            </div>
            {{ $members->links() }}
            <a href="{{ route('groups.index') }}" class="return">１つ前に戻る</a>
        </div>
    </div>
@endsection

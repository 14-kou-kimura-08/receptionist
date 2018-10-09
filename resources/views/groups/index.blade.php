@extends('layouts.layouts')

@section('css', '/css/groups.css')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                担当者の所属グループを教えてください
            </div>
            <div class="links">
                @foreach ($groups as $group)
                    <a href="{{ route('members.index', ['group_id' => $group->id]) }}">{{$group->name}}</a>
                @endforeach
            </div>
            <a href="{{ route('welcome') }}" class="return">TOPページに戻る</a>
        </div>
    </div>
@endsection

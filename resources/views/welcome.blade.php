@extends('layouts.layouts')

@section('css', '/css/welcome.css')

@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    ようこそ クラシコムへ<br>
                    ご用件をお伺いします
                </div>
                <div class="links">
                    <a href="{{ route('groups.index') }}">お打ち合わせ</a>
                    <a href="{{ route('users.corporate') }}">面談</a>
                    <a href="">お届け/集荷</a>
                </div>
            </div>
        </div>
@endsection

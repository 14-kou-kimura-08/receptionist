@extends('layouts.layouts')

@section('css', '/css/thanks.css')

@section('head')
    <meta http-equiv="refresh" content="15;URL=http://127.0.0.1:8000">
@endsection

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                担当者を呼び出しています<br>
                少々お待ちください
            </div>
            <div class="links">
                <a href="{{ route('welcome') }}">戻る</a>
            </div>
        </div>
    </div>
@endsection

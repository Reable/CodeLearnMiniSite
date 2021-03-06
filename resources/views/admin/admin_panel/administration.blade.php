@extends('layout')

@section('title_name')
    Панель администрирования
@endsection

@section('main')
    <div class="administration">
        <div class="container block">
            <div class="wrap">
                <a class="item" href="{{ route('add_languages_page') }}">
                    <div class="item">
                        <h3>Добавления языка программирования</h3>
                    </div>
                </a>
                <a class="item" href="{{ route('add_chapters_page') }}">
                    <div class="item">
                        <h3>Добавления главы</h3>
                    </div>
                </a>
                <a class="item" href="{{ route('add_recording_page') }}">
                    <div class="item">
                        <h3>Добавления записи к главе</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection

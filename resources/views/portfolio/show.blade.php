@extends('portfolio.app')

@if (Config::get('app.locale') === Config::get('constants.locale.ja'))
    @section('description', 'kuromokaのポートフォリオサイトの日本語版です。')
    @section('title', 'Japanese')
@else
    @section('description', "English version page of kuromoka's portfolio website.")
    @section('title', 'English')
@endif

@section('content')
    <app-component :is-index="false" locale="{{ Config::get('app.locale') }}"></app-component>
@endsection

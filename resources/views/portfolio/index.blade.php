@extends('portfolio.app')

@section('description', "Language selection page of kuromoka's portfolio website.")
@section('title', 'Language Selection / 言語選択')

@section('content')
    <app-component :is-index="true" locale="{{ Config::get('app.locale') }}"></app-component>
@endsection

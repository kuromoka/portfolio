@extends('portfolio.app')

@section('title', 'Language Selection')

@section('content')
    <app-component :is-index="true" locale="{{ Config::get('app.locale') }}"></app-component>
@endsection

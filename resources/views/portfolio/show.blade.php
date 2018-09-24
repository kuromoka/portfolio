@extends('portfolio.app')

@if (Config::get('app.locale') === Config::get('constants.locale.ja'))
    @section('title', 'Japanese')
@else
    @section('title', 'English')
@endif

@section('content')
    <app-component :is-index="false" locale="{{ Config::get('app.locale') }}"></app-component>
@endsection

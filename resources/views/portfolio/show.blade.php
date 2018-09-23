@extends('portfolio.app')

@section('title', 'English')

@section('content')
    <app-component :is-index="false" locale="{{ Config::get('app.locale') }}"></app-component>
@endsection

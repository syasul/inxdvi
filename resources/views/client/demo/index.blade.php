@extends('layouts.client')

@section('title', 'Demo Aplikasi - INXDVI')

@section('content')
    <div id="root" data-page="demo" data-props="{{ json_encode([
        'appDemos' => $appDemos,
        'settings' => $settings ?? []
    ]) }}"></div>
@endsection

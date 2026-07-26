@extends('layouts.client')

@section('title', 'Blog & Artikel - INXDVI')

@section('content')
    <div id="root" data-page="blog-index" data-props="{{ json_encode([
        'articles' => $articles,
        'settings' => $settings ?? []
    ]) }}"></div>
@endsection
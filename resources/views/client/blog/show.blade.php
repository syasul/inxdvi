@extends('layouts.client')

@section('title', $article->title . ' - INXDVI Blog')

@section('content')
    <div id="root" data-page="blog-show" data-props="{{ json_encode([
        'article' => $article,
        'recentArticles' => $recentArticles,
        'settings' => $settings ?? []
    ]) }}"></div>
@endsection
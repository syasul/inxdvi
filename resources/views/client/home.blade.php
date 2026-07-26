@extends('layouts.client')

@section('title', 'INXDVI.COM — Solusi Digital Premium')

@section('content')
    <div id="root" data-page="home" data-props="{{ json_encode([
        'services' => $services,
        'portfolios' => $portfolios,
        'articles' => $articles,
        'faqs' => $faqs,
        'packages' => $packages,
        'testimonials' => $testimonials,
        'siteStats' => $siteStats,
        'appDemos' => $appDemos,
        'settings' => $settings ?? []
    ]) }}"></div>
@endsection
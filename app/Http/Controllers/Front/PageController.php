<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Article;
use App\Models\Faq;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $services = Service::where('is_active', true)->get();
        $portfolios = Portfolio::latest()->take(3)->get();
        $articles = Article::where('status', 'published')->latest()->take(3)->get();
        $faqs = Faq::where('is_active', true)->get();

        return view('client.home', compact('services', 'portfolios', 'articles', 'faqs'));
    }

    public function blogIndex()
    {
        $articles = Article::where('status', 'published')->latest()->paginate(9);
        return view('client.blog.index', compact('articles'));
    }

    public function blogShow($slug)
    {
        $article = Article::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        $recentArticles = Article::where('status', 'published')
            ->where('id', '!=', $article->id)
            ->latest()
            ->take(3)
            ->get();

        return view('client.blog.show', compact('article', 'recentArticles'));
    }
}

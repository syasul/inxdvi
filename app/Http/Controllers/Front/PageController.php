<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Article;
use App\Models\Faq;
use App\Models\Package;
use App\Models\Testimonial;
use App\Models\SiteStat;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $services = Service::where('is_active', true)->get();
        $portfolios = Portfolio::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        $articles = Article::where('status', 'published')->latest()->take(3)->get();
        $faqs = Faq::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        
        // New tables
        $packages = Package::with('features')->where('is_active', true)->orderBy('sort_order', 'asc')->get();
        $testimonials = Testimonial::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        
        $statsRaw = SiteStat::orderBy('sort_order', 'asc')->get();
        $siteStats = [];
        foreach ($statsRaw as $stat) {
            $siteStats[$stat->key] = [
                'value' => $stat->value,
                'label' => $stat->label
            ];
        }

        return view('client.home', compact('services', 'portfolios', 'articles', 'faqs', 'packages', 'testimonials', 'siteStats'));
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

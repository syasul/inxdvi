<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Lead;
use App\Models\Article;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'portfolios' => Portfolio::count(),
            'services' => Service::count(),
            'leads' => Lead::where('status', 'new')->count(),
            'articles' => Article::count(),
        ];

        $recentLeads = Lead::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentLeads'));
    }
}

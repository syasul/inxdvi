<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(10);
        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'client_name' => 'nullable|string',
            'problem_description' => 'required|string',
            'solution_description' => 'required|string',
            'result_description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $validated['slug'] = Str::slug($request->title);
        $validated['image_path'] = 'portfolio/default.jpg'; // Placeholder

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('portfolio', 'public');
            $validated['image_path'] = $path;
        }

        Portfolio::create($validated);

        return redirect()->back()->with('success', 'Portfolio entry created.');
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'client_name' => 'nullable|string',
            'problem_description' => 'required|string',
            'solution_description' => 'required|string',
            'result_description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $validated['slug'] = Str::slug($request->title);
        
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('portfolio', 'public');
            $validated['image_path'] = $path;
        }

        $portfolio->update($validated);

        return redirect()->back()->with('success', 'Portfolio entry updated.');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->back()->with('success', 'Portfolio entry deleted.');
    }
}

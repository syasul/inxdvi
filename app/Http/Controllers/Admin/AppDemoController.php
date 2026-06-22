<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AppDemo;
use Illuminate\Http\Request;

class AppDemoController extends Controller
{
    public function index()
    {
        $appDemos = AppDemo::orderBy('sort_order', 'asc')->latest()->paginate(10);
        return view('admin.app-demo.index', compact('appDemos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url' => 'required|url|max:255',
            'image' => 'nullable|image|max:2048',
            'sort_order' => 'required|integer|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        $validated['is_active'] = $request->has('is_active') ? true : false;
        $validated['image_path'] = null;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('app-demo', 'public');
            $validated['image_path'] = $path;
        }

        AppDemo::create($validated);

        return redirect()->back()->with('success', 'Application Demo entry created successfully.');
    }

    public function update(Request $request, AppDemo $appDemo)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url' => 'required|url|max:255',
            'image' => 'nullable|image|max:2048',
            'sort_order' => 'required|integer|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        $validated['is_active'] = $request->has('is_active') ? true : false;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('app-demo', 'public');
            $validated['image_path'] = $path;
        }

        $appDemo->update($validated);

        return redirect()->back()->with('success', 'Application Demo entry updated successfully.');
    }

    public function destroy(AppDemo $appDemo)
    {
        $appDemo->delete();
        return redirect()->back()->with('success', 'Application Demo entry deleted successfully.');
    }
}

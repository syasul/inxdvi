<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.service.index', compact('services'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|string|max:50',
            'description' => 'required|string',
            'base_price' => 'required|numeric',
        ]);

        $validated['slug'] = Str::slug($request->name);
        
        Service::create($validated);

        return redirect()->back()->with('success', 'Service added successfully.');
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|string|max:50',
            'description' => 'required|string',
            'base_price' => 'required|numeric',
        ]);

        $validated['slug'] = Str::slug($request->name);
        
        $service->update($validated);

        return redirect()->back()->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back()->with('success', 'Service deleted successfully.');
    }
}

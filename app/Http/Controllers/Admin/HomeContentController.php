<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeContent;
use Illuminate\Http\Request;

class HomeContentController extends Controller
{
    public function index()
    {
        $contents = HomeContent::all()->groupBy('section');
        return view('admin.home-content.index', compact('contents'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'contents' => 'required|array',
        ]);

        foreach ($request->contents as $key => $value) {
            HomeContent::where('key', $key)->update(['value' => $value]);
        }

        return redirect()->back()->with('success', 'Home contents updated successfully.');
    }
}

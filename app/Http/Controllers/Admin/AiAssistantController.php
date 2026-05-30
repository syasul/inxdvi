<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AiAssistantController extends Controller
{
    public function index()
    {
        return view('admin.ai-assistant.index');
    }

    public function updateConfig(Request $request)
    {
        // Placeholder for AI configuration (e.g., API keys, system prompts)
        return redirect()->back()->with('success', 'AI Configuration updated.');
    }
}

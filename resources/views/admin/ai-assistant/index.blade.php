@extends('admin.layout.admin')

@section('content')
<header>
    <div>
        <h1>AI Assistant for Owners</h1>
        <p style="color: var(--text-muted);">Manage and configure your startup's flagship AI solution.</p>
    </div>
    <div style="background: #e0f2fe; color: #0369a1; padding: 0.5rem 1rem; border-radius: 0.75rem; font-weight: 600; font-size: 0.875rem; display: flex; align-items: center; gap: 0.5rem;">
        <i data-lucide="info"></i> Development Mode
    </div>
</header>

<div style="display: grid; grid-template-columns: 2fr 1fr; gap: 1.5rem;">
    <div class="card">
        <h2 style="margin-bottom: 1.5rem; font-size: 1.25rem;">AI Configuration</h2>
        <form action="#">
            <div style="margin-bottom: 1.5rem;">
                <label style="display: block; font-weight: 600; margin-bottom: 0.5rem;">System Prompt (Instructions)</label>
                <textarea rows="6" style="width: 100%; padding: 0.75rem; border-radius: 0.5rem; border: 1px solid var(--border); font-size: 0.875rem;" 
                          placeholder="You are an AI assistant helping a business owner to manage their UMKM..."></textarea>
            </div>
            
            <div style="margin-bottom: 1.5rem;">
                <label style="display: block; font-weight: 600; margin-bottom: 0.5rem;">AI Model</label>
                <select style="width: 100%; padding: 0.75rem; border-radius: 0.5rem; border: 1px solid var(--border); font-size: 1rem; background: white;">
                    <option>Gemini 1.5 Pro</option>
                    <option>GPT-4o</option>
                    <option>Claude 3.5 Sonnet</option>
                </select>
            </div>

            <div style="padding-top: 1.5rem; border-top: 1px solid var(--border);">
                <button type="button" class="btn btn-primary">Update Instructions</button>
            </div>
        </form>
    </div>

    <div class="card" style="background: #f8fafc;">
        <h3 style="margin-bottom: 1rem;">Assistant Features</h3>
        <ul style="list-style: none;">
            <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem; color: #475569;">
                <i data-lucide="check" style="color: #166534;" size="20"></i>
                Sales Analysis
            </li>
            <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem; color: #475569;">
                <i data-lucide="check" style="color: #166534;" size="20"></i>
                Inventory Alerts
            </li>
            <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem; color: #475569;">
                <i data-lucide="check" style="color: #166534;" size="20"></i>
                Customer Engagement
            </li>
            <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem; color: #94a3b8;">
                <i data-lucide="circle" size="20"></i>
                Market Forecasting (Pending)
            </li>
        </ul>
        <div style="margin-top: 2rem; padding: 1rem; background: white; border-radius: 0.75rem; border: 1px dashed var(--border);">
            <p style="font-size: 0.75rem; color: var(--text-muted); text-align: center;">
                Integrate with WhatsApp API to enable owner messaging.
            </p>
        </div>
    </div>
</div>

<div class="card" style="margin-top: 1.5rem;">
    <h3>Recent AI Interactions</h3>
    <p style="color: var(--text-muted); margin-top: 0.5rem;">No interactions yet. The AI assistant is waiting for its first query.</p>
</div>
@endsection

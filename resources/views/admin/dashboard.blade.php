@extends('admin.layout.admin')

@section('content')
<header>
    <div>
        <h1>Welcome Back, Admin</h1>
        <p style="color: var(--text-muted);">Here's what's happening with INXDVI today.</p>
    </div>
    <div style="text-align: right;">
        <div style="font-weight: 800; font-size: 1.125rem; color: #0f172a;">{{ now()->format('H:i') }}</div>
        <div style="font-size: 0.875rem; color: var(--text-muted);">{{ now()->format('l, d F Y') }}</div>
    </div>
</header>

<div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 1.5rem; margin-bottom: 2.5rem;">
    <div class="card" style="margin-bottom: 0; padding: 1.5rem; display: flex; align-items: center; gap: 1.25rem;">
        <div style="width: 48px; height: 48px; background: #eef2ff; color: var(--primary); border-radius: 1rem; display: flex; align-items: center; justify-content: center;">
            <i data-lucide="briefcase"></i>
        </div>
        <div>
            <div style="font-size: 0.75rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase;">Portfolios</div>
            <div style="font-size: 1.5rem; font-weight: 800;">{{ $stats['portfolios'] }}</div>
        </div>
    </div>
    <div class="card" style="margin-bottom: 0; padding: 1.5rem; display: flex; align-items: center; gap: 1.25rem;">
        <div style="width: 48px; height: 48px; background: #f0fdf4; color: #166534; border-radius: 1rem; display: flex; align-items: center; justify-content: center;">
            <i data-lucide="layers"></i>
        </div>
        <div>
            <div style="font-size: 0.75rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase;">Services</div>
            <div style="font-size: 1.5rem; font-weight: 800;">{{ $stats['services'] }}</div>
        </div>
    </div>
    <div class="card" style="margin-bottom: 0; padding: 1.5rem; display: flex; align-items: center; gap: 1.25rem;">
        <div style="width: 48px; height: 48px; background: #fff7ed; color: #9a3412; border-radius: 1rem; display: flex; align-items: center; justify-content: center;">
            <i data-lucide="users"></i>
        </div>
        <div>
            <div style="font-size: 0.75rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase;">New Leads</div>
            <div style="font-size: 1.5rem; font-weight: 800;">{{ $stats['leads'] }}</div>
        </div>
    </div>
    <div class="card" style="margin-bottom: 0; padding: 1.5rem; display: flex; align-items: center; gap: 1.25rem;">
        <div style="width: 48px; height: 48px; background: #faf5ff; color: #6b21a8; border-radius: 1rem; display: flex; align-items: center; justify-content: center;">
            <i data-lucide="file-text"></i>
        </div>
        <div>
            <div style="font-size: 0.75rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase;">Articles</div>
            <div style="font-size: 1.5rem; font-weight: 800;">{{ $stats['articles'] }}</div>
        </div>
    </div>
    <div class="card" style="margin-bottom: 0; padding: 1.5rem; display: flex; align-items: center; gap: 1.25rem;">
        <div style="width: 48px; height: 48px; background: #ecfeff; color: #0891b2; border-radius: 1rem; display: flex; align-items: center; justify-content: center;">
            <i data-lucide="monitor"></i>
        </div>
        <div>
            <div style="font-size: 0.75rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase;">App Demos</div>
            <div style="font-size: 1.5rem; font-weight: 800;">{{ $stats['app_demos'] }}</div>
        </div>
    </div>
</div>


<div style="display: grid; grid-template-columns: 2fr 1fr; gap: 2rem;">
    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <h2 style="font-size: 1.25rem; font-weight: 800;">Recent Leads</h2>
            <button class="btn btn-sm btn-primary">View Report</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Interest</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recentLeads as $lead)
                <tr>
                    <td style="font-weight: 600;">{{ $lead->name }}</td>
                    <td><span class="badge" style="background: #f1f5f9; color: #475569;">{{ $lead->interest }}</span></td>
                    <td><span class="badge badge-new">{{ strtoupper($lead->status) }}</span></td>
                    <td style="color: var(--text-muted); font-size: 0.875rem;">{{ $lead->created_at->diffForHumans() }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div style="display: flex; flex-col; gap: 2rem;">
        <div class="card" style="background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%); color: white; border: none;">
            <h3 style="margin-bottom: 1rem; font-weight: 800;">AI Assistant</h3>
            <p style="font-size: 0.875rem; opacity: 0.9; line-height: 1.6; margin-bottom: 1.5rem;">
                Your business AI is currently analyzing market trends for UMKM.
            </p>
            <div style="padding: 1rem; background: rgba(255, 255, 255, 0.1); border-radius: 1rem; font-size: 0.75rem; font-family: monospace;">
                STATUS: OPTIMIZING...
            </div>
        </div>

        <div class="card">
            <h3 style="margin-bottom: 1.25rem; font-weight: 800;">Quick Links</h3>
            <div style="display: grid; gap: 0.75rem;">
                <a href="/admin/portfolio" class="btn" style="width: 100%; background: #f8fafc; border: 1px solid var(--border); justify-content: flex-start;">
                    <i data-lucide="plus" size="18"></i> New Portfolio
                </a>
                <a href="/admin/service" class="btn" style="width: 100%; background: #f8fafc; border: 1px solid var(--border); justify-content: flex-start;">
                    <i data-lucide="plus" size="18"></i> New Service
                </a>
                <a href="/admin/app-demo" class="btn" style="width: 100%; background: #f8fafc; border: 1px solid var(--border); justify-content: flex-start;">
                    <i data-lucide="monitor" size="18"></i> Manage App Demos
                </a>
                <a href="/admin/setting" class="btn" style="width: 100%; background: #f8fafc; border: 1px solid var(--border); justify-content: flex-start;">
                    <i data-lucide="settings" size="18"></i> Site Settings
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

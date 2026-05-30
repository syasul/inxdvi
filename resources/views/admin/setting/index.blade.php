@extends('admin.layout.admin')

@section('content')
<header>
    <div>
        <h1>Site Settings</h1>
        <p style="color: var(--text-muted);">Configure your startup's contact information and global variables.</p>
    </div>
</header>

<div class="card" style="max-width: 800px;">
    <form action="{{ route('admin.setting.update') }}" method="POST">
        @csrf
        @foreach($settings as $setting)
        <div style="margin-bottom: 1.5rem;">
            <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.75rem; color: var(--text-muted);">
                {{ str_replace('_', ' ', $setting->key) }}
            </label>
            @if($setting->type == 'text')
            <input type="text" name="settings[{{ $setting->key }}]" value="{{ $setting->value }}" 
                   style="width: 100%; padding: 0.75rem; border-radius: 0.5rem; border: 1px solid var(--border); font-size: 1rem;">
            @elseif($setting->type == 'textarea')
            <textarea name="settings[{{ $setting->key }}]" rows="3"
                      style="width: 100%; padding: 0.75rem; border-radius: 0.5rem; border: 1px solid var(--border); font-size: 1rem;">{{ $setting->value }}</textarea>
            @endif
        </div>
        @endforeach

        <div style="margin-top: 2rem; border-top: 1px solid var(--border); padding-top: 1.5rem;">
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </form>
</div>
@endsection

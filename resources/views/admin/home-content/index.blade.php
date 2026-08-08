@extends('admin.layout.admin')

@section('content')
<header>
    <div>
        <h1>Home Page Contents</h1>
        <p style="color: var(--text-muted);">Manage and edit titles, badges, and paragraphs displayed on the home page.</p>
    </div>
</header>

<div class="card" style="max-width: 800px;">
    <form action="{{ route('admin.home-content.update') }}" method="POST">
        @csrf
        
        @foreach($contents as $section => $sectionContents)
        <div style="margin-bottom: 2.5rem; border-bottom: 1px solid var(--border); padding-bottom: 1.5rem;">
            <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--primary); margin-bottom: 1.25rem; text-transform: uppercase; letter-spacing: 0.05em;">
                Section: {{ $section }}
            </h3>
            
            @foreach($sectionContents as $content)
            <div class="form-group" style="margin-bottom: 1.5rem;">
                <label style="display: block; font-weight: 700; margin-bottom: 0.5rem; font-size: 0.875rem; color: #334155;">
                    {{ $content->label }} <span style="font-weight: normal; color: var(--text-muted); font-size: 0.75rem;">({{ $content->key }})</span>
                </label>
                
                @if($content->type == 'textarea')
                <textarea name="contents[{{ $content->key }}]" rows="4" class="form-control" style="width: 100%; border: 1px solid var(--border); font-size: 0.9375rem;">{{ $content->value }}</textarea>
                @else
                <input type="text" name="contents[{{ $content->key }}]" value="{{ $content->value }}" class="form-control" style="width: 100%; border: 1px solid var(--border); font-size: 0.9375rem;">
                @endif
            </div>
            @endforeach
        </div>
        @endforeach

        <div style="margin-top: 2rem; padding-top: 0.5rem;">
            <button type="submit" class="btn btn-primary">Save Home Contents</button>
        </div>
    </form>
</div>
@endsection

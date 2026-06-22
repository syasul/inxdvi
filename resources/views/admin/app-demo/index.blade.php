@extends('admin.layout.admin')

@section('content')
<header>
    <div>
        <h1>Application Demos</h1>
        <p style="color: var(--text-muted);">Manage your live application demonstration links displayed on the homepage.</p>
    </div>
    <button class="btn btn-primary" onclick="openModal('addDemoModal')">
        <i data-lucide="plus"></i> Add App Demo
    </button>
</header>

<div class="card">
    <table>
        <thead>
            <tr>
                <th>App Details</th>
                <th>Demo URL</th>
                <th>Sort Order</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appDemos as $item)
            <tr>
                <td>
                    <div style="display: flex; gap: 0.75rem; align-items: center;">
                        @php
                        $imageUrl = $item->image_path;
                        if (!$imageUrl) {
                            $imageUrl = 'https://images.unsplash.com/photo-1531403009284-440f080d1e12?q=80&w=150';
                        } else if (!Str::startsWith($imageUrl, 'http')) {
                            $imageUrl = asset('storage/' . $imageUrl);
                        }
                        @endphp
                        <img src="{{ $imageUrl }}" style="width: 48px; height: 48px; object-fit: cover; border: 1px solid var(--border); border-radius: 8px;" alt="">
                        <div>
                            <div style="font-weight: 700; color: #0f172a;">{{ $item->title }}</div>
                            <div style="font-size: 0.75rem; color: var(--text-muted);">{{ Str::limit($item->description, 60) }}</div>
                        </div>
                    </div>
                </td>
                <td>
                    <a href="{{ $item->url }}" target="_blank" style="color: var(--primary); font-weight: 600; text-decoration: none; font-size: 0.875rem;">
                        {{ Str::limit($item->url, 40) }} <i data-lucide="external-link" size="12" style="display: inline; vertical-align: middle;"></i>
                    </a>
                </td>
                <td>
                    <span style="font-weight: 600;">{{ $item->sort_order }}</span>
                </td>
                <td>
                    @if($item->is_active)
                    <span class="badge" style="background: #f0fdf4; color: #166534;">ACTIVE</span>
                    @else
                    <span class="badge" style="background: #fef2f2; color: #991b1b;">INACTIVE</span>
                    @endif
                </td>
                <td>
                    <div style="display: flex; gap: 0.75rem;">
                        <button class="btn btn-sm" style="background: #f1f5f9; color: #334155;" 
                                onclick="editAppDemo({{ json_encode($item) }})">
                            <i data-lucide="edit-2" size="14"></i>
                        </button>
                        <form action="{{ route('app-demo.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Delete this app demo?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i data-lucide="trash-2" size="14"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div style="margin-top: 1.5rem;">
        {{ $appDemos->links() }}
    </div>
</div>

<!-- Add App Demo Modal -->
<div class="modal-backdrop" id="addDemoModal">
    <div class="modal" style="max-width: 600px;">
        <div class="modal-header">
            <h2>Add New App Demo</h2>
            <i data-lucide="x" class="close-modal" onclick="closeModal('addDemoModal')"></i>
        </div>
        <form action="{{ route('app-demo.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>App Title</label>
                <input type="text" name="title" class="form-control" required placeholder="e.g. Kasir Pintar Kopi Senja">
            </div>
            <div class="form-group">
                <label>Demo URL</label>
                <input type="url" name="url" class="form-control" required placeholder="e.g. https://demo.inxdvi.com/kasir">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                <div class="form-group">
                    <label>Sort Order</label>
                    <input type="number" name="sort_order" class="form-control" value="0" min="0" required>
                </div>
                <div class="form-group">
                    <label>Thumbnail / Cover Image</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="3" placeholder="Brief details about what the app does."></textarea>
            </div>
            <div class="form-group" style="display: flex; align-items: center; gap: 0.5rem; margin-top: 1rem;">
                <input type="checkbox" name="is_active" id="add_is_active" value="1" checked style="width: 18px; height: 18px; cursor: pointer;">
                <label for="add_is_active" style="margin-bottom: 0; cursor: pointer;">Show this demo on homepage</label>
            </div>
            <div style="display: flex; justify-content: flex-end; gap: 1rem; margin-top: 1.5rem;">
                <button type="button" class="btn" style="background: #f1f5f9;" onclick="closeModal('addDemoModal')">Cancel</button>
                <button type="submit" class="btn btn-primary">Save Demo</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit App Demo Modal -->
<div class="modal-backdrop" id="editDemoModal">
    <div class="modal" style="max-width: 600px;">
        <div class="modal-header">
            <h2>Edit App Demo</h2>
            <i data-lucide="x" class="close-modal" onclick="closeModal('editDemoModal')"></i>
        </div>
        <form id="editDemoForm" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>App Title</label>
                <input type="text" name="title" id="d_title" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Demo URL</label>
                <input type="url" name="url" id="d_url" class="form-control" required>
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                <div class="form-group">
                    <label>Sort Order</label>
                    <input type="number" name="sort_order" id="d_sort_order" class="form-control" min="0" required>
                </div>
                <div class="form-group">
                    <label>Thumbnail / Cover Image (Optional)</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" id="d_description" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group" style="display: flex; align-items: center; gap: 0.5rem; margin-top: 1rem;">
                <input type="checkbox" name="is_active" id="d_is_active" value="1" style="width: 18px; height: 18px; cursor: pointer;">
                <label for="d_is_active" style="margin-bottom: 0; cursor: pointer;">Show this demo on homepage</label>
            </div>
            <div style="display: flex; justify-content: flex-end; gap: 1rem; margin-top: 1.5rem;">
                <button type="button" class="btn" style="background: #f1f5f9;" onclick="closeModal('editDemoModal')">Cancel</button>
                <button type="submit" class="btn btn-primary">Update Demo</button>
            </div>
        </form>
    </div>
</div>

<script>
    function editAppDemo(data) {
        document.getElementById('editDemoForm').action = '/admin/app-demo/' + data.id;
        document.getElementById('d_title').value = data.title;
        document.getElementById('d_url').value = data.url;
        document.getElementById('d_sort_order').value = data.sort_order;
        document.getElementById('d_description').value = data.description || '';
        document.getElementById('d_is_active').checked = !!data.is_active;
        openModal('editDemoModal');
    }
</script>
@endsection

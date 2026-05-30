@extends('admin.layout.admin')

@section('content')
<header>
    <div>
        <h1>Services Management</h1>
        <p style="color: var(--text-muted);">Configure your startup's core business offerings.</p>
    </div>
    <button class="btn btn-primary" onclick="openModal('addServiceModal')">
        <i data-lucide="plus"></i> Add New Service
    </button>
</header>

<div class="card">
    <table>
        <thead>
            <tr>
                <th>Service Name</th>
                <th>Icon</th>
                <th>Base Price</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>
                    <div style="font-weight: 700; color: #0f172a;">{{ $service->name }}</div>
                    <div style="font-size: 0.75rem; color: var(--text-muted);">{{ Str::limit($service->description, 50) }}</div>
                </td>
                <td>
                    <div style="width: 32px; height: 32px; background: #eef2ff; color: var(--primary); border-radius: 0.5rem; display: flex; align-items: center; justify-content: center;">
                        <i data-lucide="{{ $service->icon ?? 'box' }}" size="18"></i>
                    </div>
                </td>
                <td><strong>IDR {{ number_format($service->base_price, 0, ',', '.') }}</strong></td>
                <td>
                    <span class="badge" style="background: {{ $service->is_active ? '#dcfce7' : '#fee2e2' }}; color: {{ $service->is_active ? '#166534' : '#991b1b' }};">
                        {{ $service->is_active ? 'ACTIVE' : 'INACTIVE' }}
                    </span>
                </td>
                <td>
                    <div style="display: flex; gap: 0.75rem;">
                        <button class="btn btn-sm" style="background: #f1f5f9; color: #334155;" 
                                onclick="editService({{ $service->id }}, '{{ $service->name }}', '{{ $service->icon }}', '{{ addslashes($service->description) }}', {{ $service->base_price }})">
                            <i data-lucide="edit-2" size="14"></i>
                        </button>
                        <form action="{{ route('service.destroy', $service->id) }}" method="POST" onsubmit="return confirm('Delete this service?')">
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
</div>

<!-- Add Service Modal -->
<div class="modal-backdrop" id="addServiceModal">
    <div class="modal">
        <div class="modal-header">
            <h2>Add New Service</h2>
            <i data-lucide="x" class="close-modal" onclick="closeModal('addServiceModal')"></i>
        </div>
        <form action="{{ route('service.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Service Name</label>
                <input type="text" name="name" class="form-control" placeholder="e.g. AI Assistant Integration" required>
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                <div class="form-group">
                    <label>Lucide Icon Name</label>
                    <input type="text" name="icon" class="form-control" placeholder="e.g. cpu, layers, box" required>
                </div>
                <div class="form-group">
                    <label>Base Price (IDR)</label>
                    <input type="number" name="base_price" class="form-control" placeholder="0" required>
                </div>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="4" placeholder="Briefly describe what this service offers..." required></textarea>
            </div>
            <div style="display: flex; justify-content: flex-end; gap: 1rem; margin-top: 1rem;">
                <button type="button" class="btn" style="background: #f1f5f9;" onclick="closeModal('addServiceModal')">Cancel</button>
                <button type="submit" class="btn btn-primary">Create Service</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Service Modal -->
<div class="modal-backdrop" id="editServiceModal">
    <div class="modal">
        <div class="modal-header">
            <h2>Edit Service</h2>
            <i data-lucide="x" class="close-modal" onclick="closeModal('editServiceModal')"></i>
        </div>
        <form id="editServiceForm" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Service Name</label>
                <input type="text" name="name" id="edit_name" class="form-control" required>
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                <div class="form-group">
                    <label>Lucide Icon Name</label>
                    <input type="text" name="icon" id="edit_icon" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Base Price (IDR)</label>
                    <input type="number" name="base_price" id="edit_price" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" id="edit_description" class="form-control" rows="4" required></textarea>
            </div>
            <div style="display: flex; justify-content: flex-end; gap: 1rem; margin-top: 1rem;">
                <button type="button" class="btn" style="background: #f1f5f9;" onclick="closeModal('editServiceModal')">Cancel</button>
                <button type="submit" class="btn btn-primary">Update Service</button>
            </div>
        </form>
    </div>
</div>

<script>
    function editService(id, name, icon, description, price) {
        document.getElementById('editServiceForm').action = '/admin/service/' + id;
        document.getElementById('edit_name').value = name;
        document.getElementById('edit_icon').value = icon;
        document.getElementById('edit_description').value = description;
        document.getElementById('edit_price').value = price;
        openModal('editServiceModal');
    }
</script>
@endsection

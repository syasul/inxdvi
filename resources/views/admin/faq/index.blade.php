@extends('admin.layout.admin')

@section('content')
<header>
    <div>
        <h1>FAQ Management</h1>
        <p style="color: var(--text-muted);">Configure questions and answers displayed on the landing page.</p>
    </div>
    <button class="btn btn-primary" onclick="openModal('addFaqModal')">
        <i data-lucide="plus"></i> Add New FAQ
    </button>
</header>

<div class="card">
    <table>
        <thead>
            <tr>
                <th>Question</th>
                <th>Answer</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($faqs as $faq)
            <tr>
                <td>
                    <div style="font-weight: 700; color: #0f172a;">{{ $faq->question }}</div>
                </td>
                <td>
                    <div style="font-size: 0.875rem; color: #475569;">{{ Str::limit($faq->answer, 80) }}</div>
                </td>
                <td>
                    <span class="badge" style="background: {{ $faq->is_active ? '#dcfce7' : '#fee2e2' }}; color: {{ $faq->is_active ? '#166534' : '#991b1b' }};">
                        {{ $faq->is_active ? 'ACTIVE' : 'INACTIVE' }}
                    </span>
                </td>
                <td>
                    <div style="display: flex; gap: 0.75rem;">
                        <button class="btn btn-sm" style="background: #f1f5f9; color: #334155;" 
                                onclick="editFaq({{ json_encode($faq) }})">
                            <i data-lucide="edit-2" size="14"></i>
                        </button>
                        <form action="{{ route('faq.destroy', $faq->id) }}" method="POST" onsubmit="return confirm('Delete this FAQ entry?')">
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
        {{ $faqs->links() }}
    </div>
</div>

<!-- Add FAQ Modal -->
<div class="modal-backdrop" id="addFaqModal">
    <div class="modal" style="max-width: 600px;">
        <div class="modal-header">
            <h2>Add New FAQ</h2>
            <i data-lucide="x" class="close-modal" onclick="closeModal('addFaqModal')"></i>
        </div>
        <form action="{{ route('faq.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Question</label>
                <input type="text" name="question" class="form-control" required placeholder="e.g. Apakah bisa dicustom?">
            </div>
            <div class="form-group">
                <label>Answer</label>
                <textarea name="answer" class="form-control" rows="5" required placeholder="Describe the answer clearly..."></textarea>
            </div>
            <div class="form-group" style="display: flex; align-items: center; gap: 0.5rem; margin-top: 1rem;">
                <input type="checkbox" name="is_active" id="add_is_active" value="1" checked style="width: auto;">
                <label for="add_is_active" style="margin-bottom: 0; cursor: pointer;">Show on website (Active)</label>
            </div>
            <div style="display: flex; justify-content: flex-end; gap: 1rem; margin-top: 1.5rem;">
                <button type="button" class="btn" style="background: #f1f5f9;" onclick="closeModal('addFaqModal')">Cancel</button>
                <button type="submit" class="btn btn-primary">Save FAQ</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit FAQ Modal -->
<div class="modal-backdrop" id="editFaqModal">
    <div class="modal" style="max-width: 600px;">
        <div class="modal-header">
            <h2>Edit FAQ</h2>
            <i data-lucide="x" class="close-modal" onclick="closeModal('editFaqModal')"></i>
        </div>
        <form id="editFaqForm" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Question</label>
                <input type="text" name="question" id="faq_question" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Answer</label>
                <textarea name="answer" id="faq_answer" class="form-control" rows="5" required></textarea>
            </div>
            <div class="form-group" style="display: flex; align-items: center; gap: 0.5rem; margin-top: 1rem;">
                <input type="checkbox" name="is_active" id="faq_is_active" value="1" style="width: auto;">
                <label for="faq_is_active" style="margin-bottom: 0; cursor: pointer;">Show on website (Active)</label>
            </div>
            <div style="display: flex; justify-content: flex-end; gap: 1rem; margin-top: 1.5rem;">
                <button type="button" class="btn" style="background: #f1f5f9;" onclick="closeModal('editFaqModal')">Cancel</button>
                <button type="submit" class="btn btn-primary">Update FAQ</button>
            </div>
        </form>
    </div>
</div>

<script>
    function editFaq(data) {
        document.getElementById('editFaqForm').action = '/admin/faq/' + data.id;
        document.getElementById('faq_question').value = data.question;
        document.getElementById('faq_answer').value = data.answer;
        document.getElementById('faq_is_active').checked = data.is_active;
        openModal('editFaqModal');
    }
</script>
@endsection

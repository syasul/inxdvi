@extends('admin.layout.admin')

@section('content')
<header>
    <div>
        <h1>Portfolio Portfolio</h1>
        <p style="color: var(--text-muted);">Manage your business success stories and use cases.</p>
    </div>
    <button class="btn btn-primary" onclick="openModal('addPortfolioModal')">
        <i data-lucide="plus"></i> Add Case Study
    </button>
</header>

<div class="card">
    <table>
        <thead>
            <tr>
                <th>Title & Client</th>
                <th>Category</th>
                <th>Results</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($portfolios as $item)
            <tr>
                <td>
                    <div style="font-weight: 700; color: #0f172a;">{{ $item->title }}</div>
                    <div style="font-size: 0.75rem; color: var(--primary);">{{ $item->client_name ?? 'Internal Project' }}</div>
                </td>
                <td><span class="badge" style="background: #eef2ff; color: var(--primary);">{{ $item->category }}</span></td>
                <td>
                    <div style="font-size: 0.875rem; color: #166534; font-weight: 600;">{{ Str::limit($item->result_description, 60) }}</div>
                </td>
                <td>
                    <div style="display: flex; gap: 0.75rem;">
                        <button class="btn btn-sm" style="background: #f1f5f9; color: #334155;" 
                                onclick="editPortfolio({{ json_encode($item) }})">
                            <i data-lucide="edit-2" size="14"></i>
                        </button>
                        <form action="{{ route('portfolio.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Delete this portfolio entry?')">
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
        {{ $portfolios->links() }}
    </div>
</div>

<!-- Add Portfolio Modal -->
<div class="modal-backdrop" id="addPortfolioModal">
    <div class="modal" style="max-width: 800px;">
        <div class="modal-header">
            <h2>Add New Portfolio</h2>
            <i data-lucide="x" class="close-modal" onclick="closeModal('addPortfolioModal')"></i>
        </div>
        <form action="{{ route('portfolio.store') }}" method="POST">
            @csrf
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                <div class="form-group">
                    <label>Project Title</label>
                    <input type="text" name="title" class="form-control" required placeholder="e.g. E-Wallet System">
                </div>
                <div class="form-group">
                    <label>Client Name</label>
                    <input type="text" name="client_name" class="form-control" placeholder="e.g. PT Maju Bersama">
                </div>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select name="category" class="form-control" required>
                    <option value="UMKM">UMKM</option>
                    <option value="MEDIUM BUSINESS">MEDIUM BUSINESS</option>
                    <option value="ENTERPRISE">ENTERPRISE</option>
                </select>
            </div>
            <div class="form-group">
                <label>Problem Description</label>
                <textarea name="problem_description" class="form-control" rows="3" required placeholder="What issues did the client face?"></textarea>
            </div>
            <div class="form-group">
                <label>Solution Provided</label>
                <textarea name="solution_description" class="form-control" rows="3" required placeholder="How did INXDVI solve it?"></textarea>
            </div>
            <div class="form-group">
                <label>Key Results</label>
                <textarea name="result_description" class="form-control" rows="2" required placeholder="e.g. Sales increased by 40%"></textarea>
            </div>
            <div style="display: flex; justify-content: flex-end; gap: 1rem; margin-top: 1rem;">
                <button type="button" class="btn" style="background: #f1f5f9;" onclick="closeModal('addPortfolioModal')">Cancel</button>
                <button type="submit" class="btn btn-primary">Save Portfolio</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Portfolio Modal -->
<div class="modal-backdrop" id="editPortfolioModal">
    <div class="modal" style="max-width: 800px;">
        <div class="modal-header">
            <h2>Edit Portfolio</h2>
            <i data-lucide="x" class="close-modal" onclick="closeModal('editPortfolioModal')"></i>
        </div>
        <form id="editPortfolioForm" method="POST">
            @csrf
            @method('PUT')
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                <div class="form-group">
                    <label>Project Title</label>
                    <input type="text" name="title" id="p_title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Client Name</label>
                    <input type="text" name="client_name" id="p_client" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select name="category" id="p_category" class="form-control" required>
                    <option value="UMKM">UMKM</option>
                    <option value="MEDIUM BUSINESS">MEDIUM BUSINESS</option>
                    <option value="ENTERPRISE">ENTERPRISE</option>
                </select>
            </div>
            <div class="form-group">
                <label>Problem Description</label>
                <textarea name="problem_description" id="p_problem" class="form-control" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label>Solution Provided</label>
                <textarea name="solution_description" id="p_solution" class="form-control" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label>Key Results</label>
                <textarea name="result_description" id="p_result" class="form-control" rows="2" required></textarea>
            </div>
            <div style="display: flex; justify-content: flex-end; gap: 1rem; margin-top: 1rem;">
                <button type="button" class="btn" style="background: #f1f5f9;" onclick="closeModal('editPortfolioModal')">Cancel</button>
                <button type="submit" class="btn btn-primary">Update Portfolio</button>
            </div>
        </form>
    </div>
</div>

<script>
    function editPortfolio(data) {
        document.getElementById('editPortfolioForm').action = '/admin/portfolio/' + data.id;
        document.getElementById('p_title').value = data.title;
        document.getElementById('p_client').value = data.client_name;
        document.getElementById('p_category').value = data.category;
        document.getElementById('p_problem').value = data.problem_description;
        document.getElementById('p_solution').value = data.solution_description;
        document.getElementById('p_result').value = data.result_description;
        openModal('editPortfolioModal');
    }
</script>
@endsection

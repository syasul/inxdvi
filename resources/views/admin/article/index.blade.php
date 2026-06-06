@extends('admin.layout.admin')

@section('content')
<header>
    <div>
        <h1>Articles & Tips</h1>
        <p style="color: var(--text-muted);">Manage your blog posts and business tips for UMKM.</p>
    </div>
    <button class="btn btn-primary" onclick="openModal('addArticleModal')">
        <i data-lucide="plus"></i> New Article
    </button>
</header>

<div class="card">
    <table>
        <thead>
            <tr>
                <th>Article Title</th>
                <th>Category</th>
                <th>Author</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>
                    <div style="display: flex; gap: 0.75rem; align-items: center;">
                        @php
                        $imageUrl = $article->image_path;
                        if (!$imageUrl) {
                            $imageUrl = 'https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&w=150';
                        } else if (!Str::startsWith($imageUrl, 'http')) {
                            $imageUrl = asset('storage/' . $imageUrl);
                        }
                        @endphp
                        <img src="{{ $imageUrl }}" style="width: 48px; height: 48px; object-fit: cover; rounded-lg; border: 1px solid var(--border-color); border-radius: 8px;" alt="">
                        <div>
                            <div style="font-weight: 700; color: #0f172a;">{{ $article->title }}</div>
                            <div style="font-size: 0.75rem; color: var(--text-muted);">{{ $article->created_at->format('d M Y') }}</div>
                        </div>
                    </div>
                </td>
                <td><span class="badge" style="background: #f1f5f9; color: #475569;">{{ $article->category }}</span></td>
                <td><span style="font-size: 0.875rem;">{{ $article->author->name }}</span></td>
                <td>
                    <span class="badge" style="background: {{ $article->status === 'published' ? '#dcfce7' : '#fef9c3' }}; color: {{ $article->status === 'published' ? '#166534' : '#854d0e' }};">
                        {{ strtoupper($article->status) }}
                    </span>
                </td>
                <td>
                    <div style="display: flex; gap: 0.75rem;">
                        <button class="btn btn-sm" style="background: #f1f5f9; color: #334155;" 
                                onclick="editArticle({{ json_encode($article) }})">
                            <i data-lucide="edit-2" size="14"></i>
                        </button>
                        <form action="{{ route('article.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Delete this article?')">
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
        {{ $articles->links() }}
    </div>
</div>

<!-- Add Article Modal -->
<div class="modal-backdrop" id="addArticleModal">
    <div class="modal" style="max-width: 900px;">
        <div class="modal-header">
            <h2>Compose New Article</h2>
            <i data-lucide="x" class="close-modal" onclick="closeModal('addArticleModal')"></i>
        </div>
        <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 1.5rem;">
                <div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" required placeholder="e.g. 5 Tips for UMKM Digitalization">
                    </div>
                    <div class="form-group">
                        <label>Excerpt (Short Summary)</label>
                        <textarea name="excerpt" class="form-control" rows="2" required placeholder="A brief hook for the article..."></textarea>
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <label>Category</label>
                        <input type="text" name="category" class="form-control" required placeholder="e.g. TECHNOLOGY, BUSINESS">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" required>
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Cover Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea name="content" class="form-control" rows="8" required placeholder="Write your full article here..."></textarea>
            </div>
            <div style="display: flex; justify-content: flex-end; gap: 1rem; margin-top: 1rem;">
                <button type="button" class="btn" style="background: #f1f5f9;" onclick="closeModal('addArticleModal')">Cancel</button>
                <button type="submit" class="btn btn-primary">Save Article</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Article Modal -->
<div class="modal-backdrop" id="editArticleModal">
    <div class="modal" style="max-width: 900px;">
        <div class="modal-header">
            <h2>Edit Article</h2>
            <i data-lucide="x" class="close-modal" onclick="closeModal('editArticleModal')"></i>
        </div>
        <form id="editArticleForm" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 1.5rem;">
                <div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" id="art_title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Excerpt</label>
                        <textarea name="excerpt" id="art_excerpt" class="form-control" rows="2" required></textarea>
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <label>Category</label>
                        <input type="text" name="category" id="art_category" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id="art_status" class="form-control" required>
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Cover Image (Optional)</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea name="content" id="art_content" class="form-control" rows="8" required></textarea>
            </div>
            <div style="display: flex; justify-content: flex-end; gap: 1rem; margin-top: 1rem;">
                <button type="button" class="btn" style="background: #f1f5f9;" onclick="closeModal('editArticleModal')">Cancel</button>
                <button type="submit" class="btn btn-primary">Update Article</button>
            </div>
        </form>
    </div>
</div>

<script>
    function editArticle(data) {
        document.getElementById('editArticleForm').action = '/admin/article/' + data.id;
        document.getElementById('art_title').value = data.title;
        document.getElementById('art_excerpt').value = data.excerpt;
        document.getElementById('art_category').value = data.category;
        document.getElementById('art_status').value = data.status;
        document.getElementById('art_content').value = data.content;
        openModal('editArticleModal');
    }
</script>
@endsection

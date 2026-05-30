<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INXDVI Admin - @yield('title', 'Dashboard')</title>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --primary-hover: #4f46e5;
            --secondary: #64748b;
            --bg-main: #f8fafc;
            --bg-sidebar: #020617;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border: #e2e8f0;
            --sidebar-width: 260px;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background-color: var(--bg-main);
            color: var(--text-main);
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Enhancement */
        aside {
            width: var(--sidebar-width);
            background: var(--bg-sidebar);
            height: 100vh;
            position: fixed;
            display: flex;
            flex-direction: column;
            padding: 2rem 1.5rem;
            z-index: 100;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--white);
            margin-bottom: 3rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
        }

        .logo i { color: var(--primary); }

        nav { flex: 1; }
        nav ul { list-style: none; }
        nav li { margin-bottom: 0.75rem; }

        nav a {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 0.875rem 1rem;
            text-decoration: none;
            color: #94a3b8;
            border-radius: 1rem;
            transition: all 0.3s;
            font-weight: 600;
            font-size: 0.9375rem;
        }

        nav a:hover, nav a.active {
            background: rgba(255, 255, 255, 0.05);
            color: var(--white);
        }

        nav a.active {
            background: var(--primary);
            color: var(--white);
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
        }

        .logout-btn {
            color: #ef4444;
            margin-top: 2rem;
            padding: 1rem;
            border-radius: 1rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            text-decoration: none;
            font-weight: 700;
            transition: background 0.3s;
        }
        .logout-btn:hover { background: rgba(239, 68, 68, 0.1); }

        /* Main Content Enhancement */
        main {
            margin-left: var(--sidebar-width);
            flex: 1;
            padding: 2.5rem;
            width: calc(100% - var(--sidebar-width));
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2.5rem;
        }

        header h1 { font-size: 1.75rem; font-weight: 800; color: #0f172a; }

        .card {
            background: var(--white);
            padding: 2rem;
            border-radius: 1.5rem;
            border: 1px solid var(--border);
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
        }

        /* Buttons */
        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 0.625rem;
            border: none;
            text-decoration: none;
            font-size: 0.875rem;
        }

        .btn-primary { background: var(--primary); color: var(--white); }
        .btn-primary:hover { background: var(--primary-hover); transform: translateY(-2px); box-shadow: 0 4px 12px rgba(99, 102, 241, 0.2); }

        .btn-danger { background: #fee2e2; color: #991b1b; }
        .btn-danger:hover { background: #fecaca; }

        .btn-sm { padding: 0.5rem 1rem; font-size: 0.75rem; }

        /* Modal System */
        .modal-backdrop {
            position: fixed;
            inset: 0;
            background: rgba(2, 6, 23, 0.7);
            backdrop-filter: blur(8px);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            padding: 1.5rem;
        }

        .modal {
            background: var(--white);
            width: 100%;
            max-width: 600px;
            border-radius: 2rem;
            padding: 2.5rem;
            position: relative;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            animation: modalIn 0.3s ease-out;
        }

        @keyframes modalIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .modal-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; }
        .modal-header h2 { font-size: 1.5rem; font-weight: 800; }
        .close-modal { cursor: pointer; color: var(--text-muted); }

        /* Form Controls */
        .form-group { margin-bottom: 1.5rem; }
        .form-group label { display: block; font-size: 0.875rem; font-weight: 700; margin-bottom: 0.625rem; color: #334155; }
        .form-control {
            width: 100%;
            padding: 0.875rem 1.25rem;
            border-radius: 1rem;
            border: 1px solid var(--border);
            font-size: 0.9375rem;
            transition: all 0.3s;
            outline: none;
            background: #f8fafc;
        }
        .form-control:focus { border-color: var(--primary); background: var(--white); box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1); }

        /* Table Enhancement */
        table { width: 100%; border-collapse: collapse; }
        th { text-align: left; padding: 1.25rem; color: #64748b; font-weight: 700; font-size: 0.75rem; text-transform: uppercase; border-bottom: 1px solid var(--border); }
        td { padding: 1.25rem; border-bottom: 1px solid var(--border); vertical-align: middle; }
        tr:hover td { background: #f8fafc; }

        /* Toast Notifications */
        .toast {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background: #0f172a;
            color: white;
            padding: 1rem 1.5rem;
            border-radius: 1rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            z-index: 10000;
            animation: slideIn 0.3s ease-out;
        }

        @keyframes slideIn { from { transform: translateX(100%); } to { transform: translateX(0); } }

        .badge { padding: 0.375rem 0.75rem; border-radius: 0.75rem; font-size: 0.75rem; font-weight: 700; }
    </style>
</head>
<body>
    <aside>
        <a href="/admin" class="logo">
            <i data-lucide="rocket"></i>
            INXDVI
        </a>
        <nav>
            <ul>
                <li><a href="/admin" class="{{ Request::is('admin') ? 'active' : '' }}"><i data-lucide="layout-dashboard"></i> Dashboard</a></li>
                <li><a href="/admin/portfolio" class="{{ Request::is('admin/portfolio*') ? 'active' : '' }}"><i data-lucide="briefcase"></i> Portfolio</a></li>
                <li><a href="/admin/service" class="{{ Request::is('admin/service*') ? 'active' : '' }}"><i data-lucide="layers"></i> Services</a></li>
                <li><a href="/admin/article" class="{{ Request::is('admin/article*') ? 'active' : '' }}"><i data-lucide="file-text"></i> Articles</a></li>
                <li><a href="/admin/ai-assistant" class="{{ Request::is('admin/ai-assistant*') ? 'active' : '' }}"><i data-lucide="cpu"></i> AI Assistant</a></li>
                <li><a href="/admin/setting" class="{{ Request::is('admin/setting*') ? 'active' : '' }}"><i data-lucide="settings"></i> Settings</a></li>
            </ul>
        </nav>
        <a href="{{ route('logout') }}" class="logout-btn">
            <i data-lucide="log-out"></i>
            Sign Out
        </a>
    </aside>

    <main>
        @yield('content')
    </main>

    @if(session('success'))
    <div class="toast" id="successToast">
        <i data-lucide="check-circle" style="color: #22c55e;"></i>
        <span>{{ session('success') }}</span>
    </div>
    @endif

    <script>
        lucide.createIcons();

        // Toast logic
        const toast = document.getElementById('successToast');
        if(toast) {
            setTimeout(() => {
                toast.style.opacity = '0';
                toast.style.transform = 'translateX(100%)';
                toast.style.transition = 'all 0.5s';
                setTimeout(() => toast.remove(), 500);
            }, 3000);
        }

        // Modal Logic Helper
        function openModal(id) {
            document.getElementById(id).style.display = 'flex';
        }
        function closeModal(id) {
            document.getElementById(id).style.display = 'none';
        }

        // Close modal on click outside
        window.onclick = function(event) {
            if (event.target.classList.contains('modal-backdrop')) {
                event.target.style.display = "none";
            }
        }
    </script>
</body>
</html>

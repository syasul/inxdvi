<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - INXDVI Admin</title>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --primary-glow: rgba(99, 102, 241, 0.5);
            --bg-dark: #020617;
            --card-bg: rgba(15, 23, 42, 0.8);
            --border: rgba(255, 255, 255, 0.1);
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background-color: var(--bg-dark);
            color: var(--text-main);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background-image: 
                radial-gradient(circle at 20% 20%, rgba(99, 102, 241, 0.15) 0%, transparent 40%),
                radial-gradient(circle at 80% 80%, rgba(168, 85, 247, 0.15) 0%, transparent 40%);
        }

        /* Animated Background Blobs */
        .blob {
            position: absolute;
            width: 500px;
            height: 500px;
            background: var(--primary);
            filter: blur(120px);
            opacity: 0.1;
            z-index: -1;
            border-radius: 50%;
            animation: move 20s infinite alternate;
        }

        @keyframes move {
            from { transform: translate(-10%, -10%); }
            to { transform: translate(10%, 10%); }
        }

        .login-container {
            width: 100%;
            max-width: 440px;
            padding: 20px;
            z-index: 10;
        }

        .login-card {
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            padding: 3rem 2.5rem;
            border-radius: 2rem;
            border: 1px solid var(--border);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            font-size: 1.75rem;
            font-weight: 800;
            color: white;
            margin-bottom: 2.5rem;
            letter-spacing: -0.025em;
        }

        .logo i {
            color: var(--primary);
            filter: drop-shadow(0 0 8px var(--primary-glow));
        }

        .header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .header h1 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: white;
        }

        .header p {
            color: var(--text-muted);
            font-size: 0.9375rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: var(--text-main);
            margin-left: 0.25rem;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-wrapper i {
            position: absolute;
            left: 1.25rem;
            color: var(--text-muted);
            pointer-events: none;
            width: 18px;
            height: 18px;
            transition: color 0.3s;
        }

        input {
            width: 100%;
            padding: 1rem 1rem 1rem 3.25rem;
            background: rgba(2, 6, 23, 0.5);
            border-radius: 1rem;
            border: 1px solid var(--border);
            font-size: 0.9375rem;
            color: white;
            transition: all 0.3s;
            outline: none;
        }

        input:focus {
            border-color: var(--primary);
            background: rgba(2, 6, 23, 0.8);
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
        }

        input:focus + i {
            color: var(--primary);
        }

        .btn-submit {
            width: 100%;
            padding: 1rem;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 1rem;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 1rem;
            box-shadow: 0 4px 14px 0 var(--primary-glow);
        }

        .btn-submit:hover {
            background: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px 0 var(--primary-glow);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .error-message {
            background: rgba(239, 68, 68, 0.1);
            color: #f87171;
            padding: 1rem;
            border-radius: 1rem;
            font-size: 0.875rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(239, 68, 68, 0.2);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .footer-text {
            text-align: center;
            margin-top: 2.5rem;
            font-size: 0.8125rem;
            color: var(--text-muted);
            font-weight: 500;
        }

        /* Lucide icon fix */
        svg {
            display: block;
        }
    </style>
</head>
<body>
    <div class="blob"></div>
    
    <div class="login-container">
        <div class="login-card">
            <div class="logo">
                <i data-lucide="rocket"></i>
                INXDVI
            </div>
            
            <div class="header">
                <h1>Welcome Back</h1>
                <p>Please enter your details to sign in</p>
            </div>

            @if($errors->any())
                <div class="error-message">
                    <i data-lucide="alert-circle" size="18"></i>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Email Address</label>
                    <div class="input-wrapper">
                        <i data-lucide="mail"></i>
                        <input type="email" name="email" placeholder="admin@inxdvi.com" required value="{{ old('email') }}" autocomplete="email">
                    </div>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <div class="input-wrapper">
                        <i data-lucide="lock"></i>
                        <input type="password" name="password" placeholder="••••••••" required autocomplete="current-password">
                    </div>
                </div>

                <button type="submit" class="btn-submit">Sign In to Dashboard</button>
            </form>

            <p class="footer-text">
                &copy; {{ date('Y') }} INXDVI Indonesia
            </p>
        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>

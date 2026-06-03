<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - INXDVI Admin</title>
    <link rel="icon" type="image/png" href="/images/logo.png">
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4f46e5;
            --primary-hover: #4338ca;
            --primary-light: #e0e7ff;
            --bg-light: #f8fafc;
            --bg-dark: #09090b;
            --text-dark: #0f172a;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --card-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background-color: var(--bg-light);
            color: var(--text-dark);
            height: 100vh;
            display: flex;
            overflow: hidden;
        }

        /* Split Layout */
        .login-wrapper {
            display: flex;
            width: 100%;
            height: 100vh;
        }

        /* Left Visual Panel (Dark, Interactive Canvas + Text Slider) */
        .left-panel {
            display: none;
            width: 55%;
            background-color: var(--bg-dark);
            position: relative;
            flex-direction: column;
            justify-content: space-between;
            padding: 4rem;
            color: white;
            z-index: 1;
            border-right: 1px solid rgba(255, 255, 255, 0.05);
        }

        @media (min-width: 768px) {
            .left-panel {
                display: flex;
            }
        }

        /* Background grid overlay */
        .left-panel::after {
            content: '';
            position: absolute;
            inset: 0;
            background-image: linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
            background-size: 40px 40px;
            pointer-events: none;
            z-index: -1;
        }

        /* Interactive Canvas */
        #particle-canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            pointer-events: all;
        }

        .brand-header {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 1.5rem;
            font-weight: 800;
            letter-spacing: -0.03em;
            animation: fadeInDown 0.8s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        .brand-logo-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary), #818cf8);
            border-radius: 12px;
            color: white;
            box-shadow: 0 8px 16px rgba(79, 70, 229, 0.3);
        }

        .brand-header span {
            color: white;
        }

        .brand-header span.highlight {
            background: linear-gradient(to right, #a5b4fc, #818cf8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Feature/Text Slider */
        .slider-container {
            max-width: 480px;
            margin-bottom: 2rem;
            animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.2s both;
        }

        .slide {
            display: none;
            opacity: 0;
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
            transform: translateY(10px);
        }

        .slide.active {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        .slide h2 {
            font-size: 2.25rem;
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 1.25rem;
            letter-spacing: -0.02em;
            background: linear-gradient(to right, #ffffff, #e2e8f0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .slide p {
            font-size: 1rem;
            color: #94a3b8;
            line-height: 1.6;
            font-weight: 500;
        }

        .slider-dots {
            display: flex;
            gap: 0.5rem;
            margin-top: 2rem;
        }

        .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            cursor: pointer;
            transition: all 0.3s;
        }

        .dot.active {
            width: 24px;
            border-radius: 4px;
            background: var(--primary);
        }

        .left-footer {
            font-size: 0.875rem;
            color: #475569;
            font-weight: 500;
            animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.4s both;
        }

        /* Right Input Panel */
        .right-panel {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2.5rem;
            background-color: white;
            position: relative;
        }

        @media (min-width: 768px) {
            .right-panel {
                width: 45%;
            }
        }

        .form-container {
            width: 100%;
            max-width: 380px;
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        /* Responsive logo display for mobile screen */
        .mobile-brand {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 1.25rem;
            font-weight: 800;
            margin-bottom: 2rem;
            align-self: flex-start;
            animation: fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        @media (min-width: 768px) {
            .mobile-brand {
                display: none;
            }
        }

        .form-header {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-header h1 {
            font-size: 1.75rem;
            font-weight: 800;
            color: var(--text-dark);
            letter-spacing: -0.025em;
            animation: fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) 0.1s both;
        }

        .form-header p {
            font-size: 0.9375rem;
            color: var(--text-muted);
            font-weight: 500;
            animation: fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) 0.15s both;
        }

        /* Inputs & Form layout */
        form {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
            animation: fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) 0.2s both;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-group label {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--text-dark);
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-wrapper i.input-icon {
            position: absolute;
            left: 1rem;
            color: var(--text-muted);
            pointer-events: none;
            width: 18px;
            height: 18px;
            transition: color 0.2s ease;
        }

        input {
            width: 100%;
            padding: 0.875rem 1rem 0.875rem 2.75rem;
            border: 1px solid var(--border-color);
            background-color: var(--bg-light);
            border-radius: 12px;
            font-size: 0.9375rem;
            color: var(--text-dark);
            outline: none;
            font-weight: 500;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }

        input::placeholder {
            color: #a0aec0;
        }

        input:hover {
            border-color: #cbd5e1;
        }

        input:focus {
            border-color: var(--primary);
            background-color: white;
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
        }

        input:focus + i.input-icon {
            color: var(--primary);
        }

        /* Password Show/Hide */
        .toggle-password {
            position: absolute;
            right: 1rem;
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            transition: color 0.2s;
        }

        .toggle-password:hover {
            color: var(--text-dark);
        }

        /* Remember & Forgot Password */
        .form-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 0.875rem;
            font-weight: 500;
            margin-top: 0.25rem;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            user-select: none;
        }

        .remember-me input[type="checkbox"] {
            width: 16px;
            height: 16px;
            cursor: pointer;
            accent-color: var(--primary);
            padding: 0;
            margin: 0;
        }

        .forgot-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s;
        }

        .forgot-link:hover {
            color: var(--primary-hover);
        }

        /* Elegant Submit Button */
        .btn-submit {
            position: relative;
            width: 100%;
            padding: 0.875rem;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 700;
            font-size: 0.9375rem;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.2);
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 0.5rem;
        }

        .btn-submit:hover {
            background: var(--primary-hover);
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(79, 70, 229, 0.3);
        }

        .btn-submit:active {
            transform: translateY(1px);
        }

        /* Subtle Shimmer effect on button */
        .btn-submit::after {
            content: '';
            position: absolute;
            top: 0;
            left: -50%;
            width: 25%;
            height: 100%;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.2), transparent);
            transform: skewX(-25deg);
            transition: 0.75s;
        }

        .btn-submit:hover::after {
            left: 125%;
            transition: 0.75s cubic-bezier(0.16, 1, 0.3, 1);
        }

        /* Submit Button Loading animation */
        .btn-submit.loading {
            background-color: var(--primary-hover);
            color: transparent;
            pointer-events: none;
            box-shadow: none;
        }

        .btn-submit.loading .spinner {
            display: block;
        }

        .spinner {
            display: none;
            position: absolute;
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Shake animation for errors */
        .shake {
            animation: shake 0.5s cubic-bezier(.36,.07,.19,.97) both;
            transform: translate3d(0, 0, 0);
        }

        @keyframes shake {
            10%, 90% { transform: translate3d(-1px, 0, 0); }
            20%, 80% { transform: translate3d(2px, 0, 0); }
            30%, 50%, 70% { transform: translate3d(-4px, 0, 0); }
            40%, 60% { transform: translate3d(4px, 0, 0); }
        }

        /* Toast / Alert styling */
        .error-message {
            background: #fef2f2;
            color: #991b1b;
            padding: 0.875rem 1rem;
            border-radius: 12px;
            font-size: 0.875rem;
            font-weight: 500;
            border: 1px solid #fee2e2;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            animation: fadeInUp 0.5s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        .error-message i {
            color: #ef4444;
            flex-shrink: 0;
        }

        .right-footer {
            margin-top: 3rem;
            font-size: 0.8125rem;
            color: var(--text-muted);
            font-weight: 500;
            text-align: center;
            animation: fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) 0.3s both;
        }

        /* Keyframes */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <div class="login-wrapper">
        
        <!-- Left Panel: Interactive Canvas Visual & Brand Statement -->
        <div class="left-panel">
            <canvas id="particle-canvas"></canvas>
            
            <div class="brand-header" style="display: flex; align-items: center; gap: 0.75rem;">
                <img src="/images/logo.png" alt="INXDVI Logo" style="height: 32px; width: auto; object-fit: contain;">
                <span style="font-size: 0.75rem; font-family: monospace; color: #a5b4fc; background: rgba(79, 70, 229, 0.15); border: 1px solid rgba(79, 70, 229, 0.3); padding: 0.125rem 0.5rem; border-radius: 9999px; text-transform: uppercase; letter-spacing: 0.05em; font-weight: bold; margin-left: 0.25rem;">Admin</span>
            </div>
            
            <div class="slider-container">
                <div class="slide active">
                    <h2>Modern Portal Management</h2>
                    <p>Access the control center to monitor operations, manage active digital solutions, and coordinate your corporate content instantly.</p>
                </div>
                <div class="slide">
                    <h2>Real-time Analytics Desk</h2>
                    <p>Track metrics, leads, portfolio engagement, and article performance in a fully integrated administrative workstation.</p>
                </div>
                <div class="slide">
                    <h2>Intelligent Automation</h2>
                    <p>Configure custom parameters, fine-tune the AI Assistant, and configure systemic values for UMKM & enterprise client nodes.</p>
                </div>
                
                <div class="slider-dots">
                    <div class="dot active" onclick="setSlide(0)"></div>
                    <div class="dot" onclick="setSlide(1)"></div>
                    <div class="dot" onclick="setSlide(2)"></div>
                </div>
            </div>
            
            <div class="left-footer">
                &copy; {{ date('Y') }} INXDVI Indonesia. All system nodes active.
            </div>
        </div>
        
        <!-- Right Panel: Light Minimalist Login Form -->
        <div class="right-panel">
            <div class="form-container">
                
                <!-- Mobile Logo -->
                <div class="mobile-brand" style="margin-bottom: 2rem;">
                    <img src="/images/logo.png" alt="INXDVI Logo" style="height: 28px; width: auto; object-fit: contain;">
                </div>
                
                <div class="form-header">
                    <h1>Sign In</h1>
                    <p>Please enter your administrative credentials.</p>
                </div>

                @if($errors->any())
                    <div class="error-message">
                        <i data-lucide="alert-circle" size="18"></i>
                        <span>{{ $errors->first() }}</span>
                    </div>
                @endif

                <form id="login-form" action="{{ route('login.post') }}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <div class="input-wrapper">
                            <i data-lucide="mail" class="input-icon"></i>
                            <input type="email" id="email" name="email" placeholder="admin@inxdvi.com" required value="{{ old('email') }}" autocomplete="email" autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-wrapper">
                            <i data-lucide="lock" class="input-icon"></i>
                            <input type="password" id="password" name="password" placeholder="••••••••" required autocomplete="current-password">
                            <button type="button" class="toggle-password" id="toggle-password-btn" title="Toggle password visibility">
                                <i data-lucide="eye" id="eye-icon" style="width: 18px; height: 18px;"></i>
                            </button>
                        </div>
                    </div>

                    <div class="form-options">
                        <label class="remember-me">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span>Keep me signed in</span>
                        </label>
                    </div>

                    <button type="submit" class="btn-submit" id="submit-btn">
                        <span>Sign In</span>
                        <div class="spinner"></div>
                    </button>
                </form>
                
                <div class="right-footer">
                    Secured connection &middot; &copy; {{ date('Y') }} INXDVI
                </div>
                
            </div>
        </div>
        
    </div>

    <script>
        // 1. Initialize Lucide Icons
        lucide.createIcons();

        // 2. Error Shake Animation
        @if($errors->any())
            const formContainer = document.querySelector('.form-container');
            if (formContainer) {
                formContainer.classList.add('shake');
                setTimeout(() => formContainer.classList.remove('shake'), 600);
            }
        @endif

        // 3. Form Submit Loading Interaction
        const loginForm = document.getElementById('login-form');
        const submitBtn = document.getElementById('submit-btn');
        if (loginForm && submitBtn) {
            loginForm.addEventListener('submit', () => {
                submitBtn.classList.add('loading');
            });
        }

        // 4. Password Visibility Toggle
        const passwordInput = document.getElementById('password');
        const togglePasswordBtn = document.getElementById('toggle-password-btn');
        const eyeIcon = document.getElementById('eye-icon');

        if (passwordInput && togglePasswordBtn) {
            togglePasswordBtn.addEventListener('click', () => {
                const isPassword = passwordInput.type === 'password';
                passwordInput.type = isPassword ? 'text' : 'password';
                
                // Update icon
                if (isPassword) {
                    eyeIcon.setAttribute('data-lucide', 'eye-off');
                } else {
                    eyeIcon.setAttribute('data-lucide', 'eye');
                }
                lucide.createIcons();
            });
        }

        // 5. Left Panel Text Slider
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const slideCount = slides.length;
        let slideInterval;

        function showSlide(index) {
            slides.forEach(s => s.classList.remove('active'));
            dots.forEach(d => d.classList.remove('active'));
            
            slides[index].classList.add('active');
            dots[index].classList.add('active');
            currentSlide = index;
        }

        function nextSlide() {
            let next = (currentSlide + 1) % slideCount;
            showSlide(next);
        }

        function setSlide(index) {
            showSlide(index);
            resetInterval();
        }

        function resetInterval() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 5000);
        }

        resetInterval();

        // 6. Interactive Canvas Background (Node Mesh network)
        const canvas = document.getElementById('particle-canvas');
        const ctx = canvas.getContext('2d');

        let particles = [];
        let width = canvas.width = canvas.offsetWidth;
        let height = canvas.height = canvas.offsetHeight;

        const maxParticles = 65;
        const connectionDistance = 120;
        let mouse = { x: null, y: null, radius: 150 };

        window.addEventListener('resize', () => {
            if (canvas.offsetWidth > 0 && canvas.offsetHeight > 0) {
                width = canvas.width = canvas.offsetWidth;
                height = canvas.height = canvas.offsetHeight;
            }
        });

        const panel = document.querySelector('.left-panel');
        panel.addEventListener('mousemove', (e) => {
            const rect = canvas.getBoundingClientRect();
            mouse.x = e.clientX - rect.left;
            mouse.y = e.clientY - rect.top;
        });

        panel.addEventListener('mouseleave', () => {
            mouse.x = null;
            mouse.y = null;
        });

        class Particle {
            constructor() {
                this.x = Math.random() * width;
                this.y = Math.random() * height;
                this.vx = (Math.random() - 0.5) * 0.4;
                this.vy = (Math.random() - 0.5) * 0.4;
                this.radius = Math.random() * 2 + 1;
            }

            update() {
                // Bounds collision
                if (this.x < 0 || this.x > width) this.vx *= -1;
                if (this.y < 0 || this.y > height) this.vy *= -1;

                this.x += this.vx;
                this.y += this.vy;

                // Mouse interaction (push slightly away or attract)
                if (mouse.x !== null && mouse.y !== null) {
                    const dx = mouse.x - this.x;
                    const dy = mouse.y - this.y;
                    const dist = Math.hypot(dx, dy);
                    if (dist < mouse.radius) {
                        const force = (mouse.radius - dist) / mouse.radius;
                        this.x -= (dx / dist) * force * 0.8;
                        this.y -= (dy / dist) * force * 0.8;
                    }
                }
            }

            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                ctx.fillStyle = 'rgba(129, 140, 248, 0.4)';
                ctx.fill();
            }
        }

        // Initialize particles
        function init() {
            particles = [];
            for (let i = 0; i < maxParticles; i++) {
                particles.push(new Particle());
            }
        }

        function animate() {
            ctx.clearRect(0, 0, width, height);

            particles.forEach(p => {
                p.update();
                p.draw();
            });

            // Draw connections
            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    const p1 = particles[i];
                    const p2 = particles[j];
                    const dist = Math.hypot(p1.x - p2.x, p1.y - p2.y);

                    if (dist < connectionDistance) {
                        const alpha = (1 - (dist / connectionDistance)) * 0.15;
                        ctx.beginPath();
                        ctx.moveTo(p1.x, p1.y);
                        ctx.lineTo(p2.x, p2.y);
                        ctx.strokeStyle = `rgba(129, 140, 248, ${alpha})`;
                        ctx.lineWidth = 0.8;
                        ctx.stroke();
                    }
                }
            }

            requestAnimationFrame(animate);
        }

        init();
        animate();
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'INXDVI.COM — Solusi Digital Premium')</title>
    <link rel="icon" type="image/png" href="/images/logo_transparent1.png">

    <!-- CSS / Fonts / CDNs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Clash Display & Satoshi Fonts from Fontshare -->
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@300,400,500,700,900&f[]=clash-display@200,300,400,500,600,700&display=swap" rel="stylesheet">

    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
</head>
<body class="bg-[#FDFBF7] text-slate-900 antialiased selection:bg-blue-500/20 selection:text-blue-600 overflow-x-hidden">
    @yield('content')
</body>
</html>

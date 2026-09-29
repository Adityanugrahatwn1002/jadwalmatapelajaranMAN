<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jadwal Mata Pelajaran - MAN 11 Jakarta Selatan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="app-header">
        <div class="container">
            <div class="d-flex align-items-center gap-3">
                <div class="logo-placeholder">
                    Logo
                </div>
                <div>
                    <p class="school-name">Madrasah Aliyah Negeri 11 Jakarta Selatan</p>
                    <p class="school-subtitle">Sistem Jadwal Mata Pelajaran</p>
                </div>
            </div>
        </div>
    </header>

    <main class="container py-4">
        {{ $slot }}
    </main>

    <footer class="app-footer">
        <div class="container">
            <p class="footer-school">Madrasah Aliyah Negeri 11 Jakarta Selatan</p>
            <p class="footer-year">Sistem Jadwal Mata Pelajaran &copy; 2026</p>
        </div>
    </footer>
</body>
</html>

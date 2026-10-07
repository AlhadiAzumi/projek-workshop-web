<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Koleksi Buku Online</title>
</head>
<body>
    <header>
        <h2>Perpustakaan</h2>
        </header>
    <div style="display: flex; gap: 20px;">
        <aside style="width: 200px;">
            <ul>
                <li><a href="/admin/buku">Menu Buku</a></li>
                <li><a href="/admin/anggota">Menu Anggota</a></li>
                <li><a href="/set-role/admin">Role Admin</a></li>
                <li><a href="/set-role/user">Role User</a></li>
            </ul>
        </aside>
        <main>
            @yield('content')
        </main>
    </div>
    <hr>
            <footer>
                <p>&copy; 2026 - Belajar Laravel</p>
            </footer>
</body>
</html>
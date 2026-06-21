<?php
$tasks = [
    ['label' => 'Tugas1', 'path' => 'Tugas1/login.php'],
    ['label' => 'Tugas3', 'path' => 'Tugas3/login.php'],
    ['label' => 'Tugas4', 'path' => 'Tugas4/login.php'],
    ['label' => 'Tugas5', 'path' => 'Tugas5/login.php'],
    ['label' => 'Tugas6', 'path' => 'Tugas6/login.php'],
    ['label' => 'Tugas7', 'path' => 'Tugas7/login.php'],
    ['label' => 'Tugas8', 'path' => 'Tugas8/login.php'],
    ['label' => 'Tugas9', 'path' => 'Tugas9/login.php'],
    ['label' => 'Studi Kasus', 'path' => 'Tugas9/studi kasus/login.php'],
    ['label' => 'Tugas10', 'path' => 'Tugas9/Tugas10/login.php'],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Login Tugas PBW</title>
    <style>
        :root {
            --bg: #f5f8ff;
            --card: #ffffff;
            --text: #1f2937;
            --muted: #4b5563;
            --primary: #2563eb;
            --primary-soft: #dbeafe;
            --border: #e5e7eb;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #eef2ff 0%, #ffffff 100%);
            color: var(--text);
        }
        .page {
            max-width: 980px;
            margin: 0 auto;
            padding: 32px 24px;
        }
        header {
            text-align: center;
            padding: 24px 0;
        }
        h1 {
            margin: 0 0 12px;
            font-size: 2.4rem;
            letter-spacing: -0.04em;
        }
        p.lead {
            margin: 0;
            color: var(--muted);
            font-size: 1rem;
        }
        .grid {
            display: grid;
            gap: 20px;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            margin-top: 32px;
        }
        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 18px;
            box-shadow: 0 18px 45px rgba(15, 23, 42, 0.08);
            padding: 24px;
            transition: transform 0.2s ease, border-color 0.2s ease;
        }
        .card:hover {
            transform: translateY(-4px);
            border-color: rgba(37, 99, 235, 0.3);
        }
        .card h2 {
            margin: 0 0 12px;
            font-size: 1.2rem;
        }
        .card p {
            margin: 0;
            color: var(--muted);
            line-height: 1.6;
        }
        .card a {
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            padding: 12px 16px;
            margin-top: 16px;
            color: var(--primary);
            background: var(--primary-soft);
            border-radius: 999px;
            text-decoration: none;
            font-weight: 600;
        }
        .card a span {
            margin-left: 8px;
            opacity: 0.85;
        }
        footer {
            margin-top: 40px;
            text-align: center;
            color: var(--muted);
            font-size: 0.95rem;
        }
        .note {
            background: #eff6ff;
            border-left: 4px solid #3b82f6;
            padding: 16px 18px;
            border-radius: 12px;
            color: #1d4ed8;
            margin-top: 28px;
        }
    </style>
</head>
<body>
    <div class="page">
        <header>
            <h1>Daftar Login Tugas PBW</h1>
            <p class="lead">Buka halaman login untuk setiap tugas menggunakan tautan berikut.</p>
        </header>

        <div class="grid">
            <?php foreach ($tasks as $task): ?>
                <div class="card">
                    <h2><?= htmlspecialchars($task['label']) ?></h2>
                    <p>Halaman login untuk <?= htmlspecialchars($task['label']) ?>.</p>
                    <a href="<?= htmlspecialchars($task['path']) ?>" target="_blank">Buka login <span>→</span></a>
                </div>
            <?php endforeach; ?>
        </div>

        <footer>
            &copy; 2026 Tugas PBW • Login terhubung ke semua tugas yang ada.
        </footer>
    </div>
</body>
</html>

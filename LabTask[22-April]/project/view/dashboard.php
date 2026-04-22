<?php $theme = $_COOKIE['theme'] ?? 'light'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Segoe UI', sans-serif;
            background: <?= $theme == 'dark' ? '#1e1e2e' : '#f5f7fa' ?>;
            color: <?= $theme == 'dark' ? '#cdd6f4' : '#333' ?>;
            min-height: 100vh;
        }
        nav {
            background: <?= $theme == 'dark' ? '#313244' : '#5b8dee' ?>;
            padding: 14px 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
        }
        nav .brand { font-size: 18px; font-weight: 700; }
        nav .links a {
            color: #fff;
            text-decoration: none;
            margin-left: 18px;
            font-size: 14px;
            padding: 6px 14px;
            border-radius: 6px;
            background: rgba(255,255,255,0.15);
        }
        nav .links a:hover { background: rgba(255,255,255,0.28); }
        .container { max-width: 620px; margin: 50px auto; padding: 0 20px; }
        .card {
            background: <?= $theme == 'dark' ? '#313244' : '#fff' ?>;
            border-radius: 12px;
            padding: 36px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            text-align: center;
        }
        .avatar {
            width: 64px; height: 64px;
            background: #5b8dee;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 28px; color: #fff;
            margin: 0 auto 18px;
        }
        h2 { font-size: 22px; margin-bottom: 8px; }
        .meta { font-size: 13px; color: <?= $theme == 'dark' ? '#a6adc8' : '#888' ?>; margin-top: 6px; }
        .badge {
            display: inline-block;
            margin-top: 20px;
            background: <?= $theme == 'dark' ? '#1e3a1e' : '#e8f5e9' ?>;
            color: #4caf50;
            padding: 6px 18px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }
    </style>
</head>
<body>
<nav>
    <div class="brand">MyApp</div>
    <div class="links">
        <a href="index.php?page=settings">&#9881; Settings</a>
        <a href="index.php?page=logout">Logout</a>
    </div>
</nav>
<div class="container">
    <div class="card">
        <div class="avatar">&#128100;</div>
        <h2>Hello, <?= htmlspecialchars($_SESSION['user']) ?>!</h2>
        <div class="meta">Login time: <?= htmlspecialchars($_SESSION['login_time']) ?></div>
        <div class="meta">Theme: <?= ucfirst($theme) ?></div>
        <div class="badge">&#10003; Session Active</div>
    </div>
</div>
</body>
</html>
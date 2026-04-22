<?php $theme = $_COOKIE['theme'] ?? 'light'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Settings</title>
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
            color: #fff; text-decoration: none;
            margin-left: 18px; font-size: 14px;
            padding: 6px 14px; border-radius: 6px;
            background: rgba(255,255,255,0.15);
        }
        nav .links a:hover { background: rgba(255,255,255,0.28); }
        .container { max-width: 480px; margin: 50px auto; padding: 0 20px; }
        .card {
            background: <?= $theme == 'dark' ? '#313244' : '#fff' ?>;
            border-radius: 12px;
            padding: 36px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
        }
        h2 { font-size: 20px; margin-bottom: 24px; color: #5b8dee; }
        label { display: block; font-size: 13px; font-weight: 600; margin-bottom: 10px; }
        .options { display: flex; gap: 14px; margin-bottom: 24px; }
        .option {
            flex: 1; border: 2px solid <?= $theme == 'dark' ? '#45475a' : '#ddd' ?>;
            border-radius: 10px; padding: 18px 12px;
            text-align: center; cursor: pointer;
        }
        .option input { display: none; }
        .option.active { border-color: #5b8dee; background: <?= $theme == 'dark' ? '#1e2a4a' : '#eef3ff' ?>; }
        .option .icon { font-size: 26px; display: block; margin-bottom: 6px; }
        .option .name { font-size: 13px; font-weight: 600; }
        button {
            width: 100%; padding: 10px;
            background: #5b8dee; color: #fff;
            border: none; border-radius: 7px;
            font-size: 15px; cursor: pointer;
        }
        button:hover { background: #4a7de0; }
    </style>
</head>
<body>
<nav>
    <div class="brand">MyApp</div>
    <div class="links">
        <a href="index.php?page=dashboard">Dashboard</a>
        <a href="index.php?page=logout">Logout</a>
    </div>
</nav>
<div class="container">
    <div class="card">
        <h2>&#9881; Preferences</h2>
        <form method="POST">
            <label>Select Theme</label>
            <div class="options">
                <label class="option <?= $theme == 'light' ? 'active' : '' ?>">
                    <input type="radio" name="theme" value="light" <?= $theme == 'light' ? 'checked' : '' ?>>
                    <span class="icon">&#9728;&#65039;</span>
                    <span class="name">Light</span>
                </label>
                <label class="option <?= $theme == 'dark' ? 'active' : '' ?>">
                    <input type="radio" name="theme" value="dark" <?= $theme == 'dark' ? 'checked' : '' ?>>
                    <span class="icon">&#127769;</span>
                    <span class="name">Dark</span>
                </label>
            </div>
            <button type="submit">Save Preference</button>
        </form>
    </div>
</div>
<script>
    document.querySelectorAll('.option').forEach(opt => {
        opt.addEventListener('click', () => {
            document.querySelectorAll('.option').forEach(o => o.classList.remove('active'));
            opt.classList.add('active');
        });
    });
</script>
</body>
</html>
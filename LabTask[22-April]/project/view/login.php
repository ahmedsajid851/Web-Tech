<?php $theme = $_COOKIE['theme'] ?? 'light'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Segoe UI', sans-serif;
            background: <?= $theme == 'dark' ? '#1e1e2e' : '#f5f7fa' ?>;
            color: <?= $theme == 'dark' ? '#cdd6f4' : '#333' ?>;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            background: <?= $theme == 'dark' ? '#313244' : '#fff' ?>;
            padding: 36px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 { font-size: 22px; margin-bottom: 24px; color: #5b8dee; }
        .field { margin-bottom: 18px; }
        label { display: block; font-size: 13px; font-weight: 600; margin-bottom: 6px; }
        input {
            width: 100%;
            padding: 9px 12px;
            border: 1px solid <?= $theme == 'dark' ? '#45475a' : '#ddd' ?>;
            border-radius: 7px;
            font-size: 14px;
            background: <?= $theme == 'dark' ? '#1e1e2e' : '#fff' ?>;
            color: <?= $theme == 'dark' ? '#cdd6f4' : '#333' ?>;
        }
        input:focus { outline: none; border-color: #5b8dee; }
        .alert {
            background: <?= $theme == 'dark' ? '#3d1a1a' : '#fff0f0' ?>;
            color: #f38ba8;
            border-left: 3px solid #f38ba8;
            padding: 10px 12px;
            border-radius: 6px;
            font-size: 13px;
            margin-bottom: 16px;
        }
        button {
            width: 100%; padding: 10px;
            background: #5b8dee; color: #fff;
            border: none; border-radius: 7px;
            font-size: 15px; cursor: pointer;
        }
        button:hover { background: #4a7de0; }
        .footer { text-align: center; margin-top: 16px; font-size: 13px; }
        .footer a { color: #5b8dee; text-decoration: none; }
        .footer a:hover { text-decoration: underline; }
    </style>
</head>
<body>
<div class="card">
    <h2>Welcome Back</h2>
    <?php if (!empty($error)): ?>
        <div class="alert"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <form method="POST">
        <div class="field">
            <label>Email</label>
            <input type="text" name="email" placeholder="you@example.com">
        </div>
        <div class="field">
            <label>Password</label>
            <input type="password" name="password" placeholder="Your password">
        </div>
        <button type="submit">Login</button>
    </form>
    <div class="footer">No account yet? <a href="index.php?page=register">Register</a></div>
</div>
</body>
</html>
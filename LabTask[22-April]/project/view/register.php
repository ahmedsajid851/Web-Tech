<?php $theme = $_COOKIE['theme'] ?? 'light'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
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
            max-width: 420px;
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
        .error { color: #f38ba8; font-size: 12px; margin-top: 4px; }
        button {
            width: 100%; padding: 10px;
            background: #5b8dee; color: #fff;
            border: none; border-radius: 7px;
            font-size: 15px; cursor: pointer;
            margin-top: 6px;
        }
        button:hover { background: #4a7de0; }
        .footer { text-align: center; margin-top: 16px; font-size: 13px; }
        .footer a { color: #5b8dee; text-decoration: none; }
        .footer a:hover { text-decoration: underline; }
    </style>
</head>
<body>
<div class="card">
    <h2>Create Account</h2>
    <form method="POST">
        <div class="field">
            <label>Username</label>
            <input type="text" name="username" value="<?= htmlspecialchars($old['username'] ?? '') ?>" placeholder="Min. 3 characters">
            <?php if (!empty($errors['username'])): ?>
                <div class="error"><?= $errors['username'] ?></div>
            <?php endif; ?>
        </div>
        <div class="field">
            <label>Email</label>
            <input type="text" name="email" value="<?= htmlspecialchars($old['email'] ?? '') ?>" placeholder="you@example.com">
            <?php if (!empty($errors['email'])): ?>
                <div class="error"><?= $errors['email'] ?></div>
            <?php endif; ?>
        </div>
        <div class="field">
            <label>Password</label>
            <input type="password" name="password" placeholder="Min. 6 characters">
            <?php if (!empty($errors['password'])): ?>
                <div class="error"><?= $errors['password'] ?></div>
            <?php endif; ?>
        </div>
        <div class="field">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" placeholder="Repeat password">
            <?php if (!empty($errors['confirm_password'])): ?>
                <div class="error"><?= $errors['confirm_password'] ?></div>
            <?php endif; ?>
        </div>
        <button type="submit">Register</button>
    </form>
    <div class="footer">Already have an account? <a href="index.php?page=login">Login</a></div>
</div>
</body>
</html>
<?php
class PreferenceController {

    public function settings() {
        if (!isset($_SESSION['user'])) {
            header("Location: index.php?page=login");
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $theme = $_POST['theme'] === 'dark' ? 'dark' : 'light';
            setcookie("theme", $theme, time() + (86400 * 30), "/");
            header("Location: index.php?page=settings");
            exit();
        }

        $theme = $_COOKIE['theme'] ?? 'light';
        include "view/settings.php";
    }
}
?>
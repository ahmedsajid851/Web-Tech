<?php
class PreferenceController {

    public function settings() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            setcookie("theme", $_POST['theme'], time() + (86400 * 30));
            header("Location: index.php?page=settings");
            exit();
        }

        $theme = $_COOKIE['theme'] ?? 'light';
        include "view/settings.php";
    }
}
?>
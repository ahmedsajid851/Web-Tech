<?php
require_once "controller/AuthController.php";
require_once "controller/PreferenceController.php";

$page = $_GET['page'] ?? 'register';

$auth = new AuthController();
$pref = new PreferenceController();

switch ($page) {
    case 'register':
        $auth->register();
        break;
    case 'login':
        $auth->login();
        break;
    case 'dashboard':
        $auth->dashboard();
        break;
    case 'logout':
        $auth->logout();
        break;
    case 'settings':
        $pref->settings();
        break;
}
?>
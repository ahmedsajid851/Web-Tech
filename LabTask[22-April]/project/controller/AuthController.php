<?php
session_start();

require_once "model/ValidationModel.php";

class AuthController {

    // File used as a simple "database" to persist registered user across sessions
    private $userFile = "registered_user.json";

    private function saveUser($data) {
        file_put_contents($this->userFile, json_encode([
            'username' => $data['username'],
            'email'    => $data['email'],
            'password' => $data['password'],
        ]));
    }

    private function getUser() {
        if (!file_exists($this->userFile)) return null;
        return json_decode(file_get_contents($this->userFile), true);
    }

    public function register() {
        $errors = [];
        $old    = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $validator = new ValidationModel();
            $errors    = $validator->validateRegistration($_POST);
            $old       = $_POST;

            if (empty($errors)) {
                // Save user to file so it persists after logout
                $this->saveUser($_POST);

                // Log in immediately after register
                $_SESSION['user']       = $_POST['username'];
                $_SESSION['login_time'] = date("Y-m-d H:i:s");

                header("Location: index.php?page=dashboard");
                exit();
            }
        }

        include "view/register.php";
    }

    public function login() {
        $error = "";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $reg = $this->getUser(); // load from file, not session

            if ($reg &&
                trim($_POST['email'])    === $reg['email'] &&
                $_POST['password']       === $reg['password']) {

                $_SESSION['user']       = $reg['username'];
                $_SESSION['login_time'] = date("Y-m-d H:i:s");

                header("Location: index.php?page=dashboard");
                exit();
            } else {
                $error = "Invalid email or password. Please try again.";
            }
        }

        include "view/login.php";
    }

    public function dashboard() {
        if (!isset($_SESSION['user'])) {
            header("Location: index.php?page=login");
            exit();
        }

        include "view/dashboard.php";
    }

    public function logout() {
        session_destroy();
        header("Location: index.php?page=login");
        exit();
    }
}
?>
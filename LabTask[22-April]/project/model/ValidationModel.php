<?php
class ValidationModel {

    public function validateRegistration($data) {
        $errors = [];

        if (empty($data['username']) || strlen(trim($data['username'])) < 3) {
            $errors['username'] = "Username must be at least 3 characters.";
        }

        if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "A valid email address is required.";
        }

        if (empty($data['password']) || strlen($data['password']) < 6) {
            $errors['password'] = "Password must be at least 6 characters.";
        }

        if ($data['password'] !== $data['confirm_password']) {
            $errors['confirm_password'] = "Passwords do not match.";
        }

        return $errors;
    }
}
?>
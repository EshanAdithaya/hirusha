<?php

class Signup extends Controller
{
    public function index()
    {
        $data['page_title'] = "Sign Up";
        $this->view("signup", $data);
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Get form data
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $confirmPassword = trim($_POST['confirmPassword']);
            $role = 'user';

            // Load User model
            $userModel = $this->loadModel('User');

            // Initialize error messages
            $errors = [];

            // Validation checks
            if (empty($name)) {
                $errors['name'] = "Name is required";
            }
            if (empty($email)) {
                $errors['email'] = "Email is required";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Invalid email format";
            } elseif ($userModel->getUserByEmail($email)) {
                $errors['email'] = "Email already exists";
            }

            if (empty($password)) {
                $errors['password'] = "Password is required";
            } elseif (strlen($password) < 6) {
                $errors['password'] = "Password must be at least 6 characters";
            }

            if (empty($confirmPassword)) {
                $errors['confirmPassword'] = "Confirm Password is required";
            } elseif ($password !== $confirmPassword) {
                $errors['confirmPassword'] = "Passwords do not match";
            }

            // Check if there are any validation errors
            if (empty($errors)) {
                // Hash the password before storing
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Register the user
                if ($userModel->register($name, $email, $hashedPassword, $role)) {
                    // Redirect to login page
                    header("Location: /login");
                    exit;
                } else {
                    $errors['general'] = "Something went wrong. Please try again.";
                }
            }

            // Load the signup form with error messages
            $data['errors'] = $errors;
            $this->view("signup", $data);
        } else {
            $this->index();
        }
    }
}

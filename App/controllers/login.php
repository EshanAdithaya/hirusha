<?php

class Login extends Controller {

    public function index() {
        $data['page_title'] = "Login";
        $this->view("login", $data);
    }

    public function authenticate() {
        $userModel = $this->model('User');
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            
            $user = $userModel->getUserByEmail($email);

            // Check if user exists and password is correct
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_logged_in'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_role'] = $user['role'];

                
                if ($user['role'] == 'admin') {
                    header("Location: /dashboard");
                } else {
                    header("Location: /home");
                }
                exit;
            } else {
                $data['error'] = "Invalid login credentials!";
                $this->view("login", $data);
            }
        }
    }

    public function logout() {
        session_destroy();
        header("Location: /login");
    }
}

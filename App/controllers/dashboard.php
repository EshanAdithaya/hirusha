<?php

class Dashboard extends Controller {

    public function index() {
        if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_role'] != 'admin') {
            header("Location: /login");
            exit;
        }

        $data['page_title'] = "Dashboard";
        $this->view("dashboard", $data);
    }
}

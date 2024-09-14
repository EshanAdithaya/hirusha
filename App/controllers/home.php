
<?php

class Home extends Controller {

    
    public function index() {
        
        $data['page_title'] = "Home";

        $this->view("home", $data);
    }

    public function login() {
            
            $data['page_title'] = "Login";
    
            $this->view("login", $data);
    }
}

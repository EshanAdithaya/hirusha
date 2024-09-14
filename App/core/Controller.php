<?php

class Controller {

    // Load a view
    public function view($view, $data = [])
    {
        $viewFile = "../app/views/" . $view . ".php";

        if (file_exists($viewFile)) {
            include $viewFile;
        } else {
            // Log error or throw exception for debugging purposes
            error_log("View file not found: " . $viewFile);
            include "../app/views/404.php";
        }
    }

    // Load a model
    protected function loadModel($model)
    {
        $modelFile = "../app/models/" . $model . ".php";

        if (file_exists($modelFile)) {
            include $modelFile;

            // Check if the class exists in the included file
            if (class_exists($model)) {
                return new $model();
            } else {
                error_log("Model class not found: " . $model);
            }
        } else {
            error_log("Model file not found: " . $modelFile);
        }

        return false;
    }
}

?>

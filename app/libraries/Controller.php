<?php
    /*
     * Base Controller
     * Loads the models and views
     */
    Class Controller {
        // Load model
        public function model($model){
            // Require model file
            require_once '../app/models/' . $model . '.php';

            // Instatiate model
            return new $model();
        }

        // Load view
        public function view($view, $data = []){
            // check for view file
            if(file_exists('../app/views/' . $view . '.php')){
                require_once '../app/views/' . $view . '.php';
            } else {
                // View foes not exist
                die('View does not exist');
            }
        }
    }
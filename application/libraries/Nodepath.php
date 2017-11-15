<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Nodepath {

    public function formatPaths() {
        $paths = array(
            'basepage'   => 'assets/landing-page/templates/',
            'bootstrap'  => 'assets/landing-page/bootstrap/dist/',
        );
        return $paths;
    }
}

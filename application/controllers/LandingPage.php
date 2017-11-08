<?php defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPage extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
    }

    public function getHome() {
        $data = array(
            'subtitle' => 'home' 
        );

        $this->render_page('clients/home', $data);
    }

    public function getContact(){
        $data = array(
            'subtitle' => 'contact us' 
        );

        $this->render_page('clients/contact_us', $data);
    }
}

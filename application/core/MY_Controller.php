<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    
    public function render_page($contents, $data = NULL) {

        $data = $this->nodepath->formatPaths();

        $data['title']      = '.:PT. INM:.';
        
        $data['header']     = $this->load->view('clients/layout/header', $data, TRUE);
        $data['contents']   = $this->load->view($contents, $data, TRUE);
        $data['footer']     = $this->load->view('clients/layout/footer', $data, TRUE);

        $this->load->view('clients/app', $data);
    }

}

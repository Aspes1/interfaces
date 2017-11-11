<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function render_page($contents, $data) {

        $data['title']      = '.:PT. INM:.';

        $page['headers']     = $this->load->view('clients/layout/header', $data, TRUE);
        $page['contents']    = $this->load->view($contents, $data, TRUE);
        $page['footers']     = $this->load->view('clients/layout/footer', $data, TRUE);

        $this->load->view('clients/app', $page);
    }

}

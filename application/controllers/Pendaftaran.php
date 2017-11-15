<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH . 'libraries/MacAddress.php');

class Pendaftaran extends CI_Controller {
    
    protected $_DEVICE_NAME;
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('real_agent');
        
        
    }

    public function testAgent()
    {
    }

    

}

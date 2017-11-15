<?php defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPage extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('real_agent');
    }

    public function getHome()
    {
        $data = $this->nodepath->formatPaths();
        $data['subtitle'] = 'home';
        $this->render_page('clients/home/home', $data);
    }

    public function getProfil()
    {
        $data = $this->nodepath->formatPaths();
        $data['subtitle'] = 'profil';
        $this->render_page('clients/profil/profil', $data);
    }

    public function getRegisterProcedure()
    {
        $data = $this->nodepath->formatPaths();
        $data['subtitle'] = 'cara_pendaftaran';
        $this->render_page('clients/registration/register-procedure', $data);
    }

    public function getFormRegistration()
    {
        $data = $this->nodepath->formatPaths();

        $data['scripts'] = array(
            $data['basepage'] . 'axios/axios.min.js',
            $data['basepage'] . 'js/jquery-validation/jquery.validate.min.js',
            $data['basepage'] . 'js/templates/form-handlers.js'
        );

        $data['subtitle'] = 'form_pendaftaran';

        $data['_mac'] = $this->real_agent->getMacDevices();
        $data['_ip']  = $this->real_agent->getRealIpAddr();

        $this->render_page('clients/registration/form-registration', $data);
    }
}

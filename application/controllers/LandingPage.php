<?php defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPage extends MY_Controller {

    public function __construct() {
        parent::__construct();
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
        $data['subtitle'] = 'form_pendaftaran';
        $this->render_page('clients/registration/form-registration', $data);
    }
}

<?php defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPage extends MY_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->library('real_agent');
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

    public function getTestimoni()
    {
        $data = $this->nodepath->formatPaths();
        $data['subtitle'] = 'testimoni';
        $this->render_page('clients/testimoni/testimoni', $data);
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

/**Tambah*/

     public function getPanduanDaftar()
    {
        $data = $this->nodepath->formatPaths();

        $data['subtitle'] = 'panduan_daftar';

        $this->render_page('clients/panduan/daftar', $data);  
    }

    public function getPanduanAplikasi()
    {
        $data = $this->nodepath->formatPaths();

        $data['subtitle'] = 'panduan_aplikasi';

        $this->render_page('clients/panduan/aplikasi', $data);  
    }

    public function getPanduanPascabayar()
    {
        $data = $this->nodepath->formatPaths();

        $data['subtitle'] = 'panduan_pascabayar';

        $this->render_page('clients/panduan/pascabayar', $data);  
    }

    public function getPanduanPrabayar()
    {
        $data = $this->nodepath->formatPaths();

        $data['subtitle'] = 'panduan_prabayar';

        $this->render_page('clients/panduan/prabayar', $data);  
    }

    public function getPanduanTeamviewer()
    {
        $data = $this->nodepath->formatPaths();

        $data['subtitle'] = 'panduan_teamviewer';

        $this->render_page('clients/panduan/teamviewer', $data);
    }

    public function getPanduanIsisaldo()
    {
        $data = $this->nodepath->formatPaths();

        $data['subtitle'] = 'panduan_saldo';
        
        $this->render_page('clients/panduan/isisaldo', $data);
    }

    public function getPanduanTransferbtn()
    {
        $data = $this->nodepath->formatPaths();

        $data['subtitle'] = 'panduan_transfer';
        
        $this->render_page('clients/panduan/transferbtn', $data);
    }

    public function getPanduanKolektif()
    {
        $data = $this->nodepath->formatPaths();

        $data['subtitle'] = 'panduan_kolektif';
        
        $this->render_page('clients/panduan/kolektif', $data);
    }

    public function getPanduanAdministrasi()
    {
        $data = $this->nodepath->formatPaths();

        $data['subtitle'] = 'panduan_administrasi';
        
        $this->render_page('clients/panduan/administrasi', $data);
    }

    public function getPanduanVoucher()
    {
        $data = $this->nodepath->formatPaths();

        $data['subtitle'] = 'panduan_voucher';
        
        $this->render_page('clients/panduan/voucher', $data);
    }

    public function getPanduanChat()
    {
        $data = $this->nodepath->formatPaths();

        $data['subtitle'] = 'panduan_chat';
        
        $this->render_page('clients/panduan/chat', $data);
    }

    public function getPanduanKomisi()
    {
        $data = $this->nodepath->formatPaths();

        $data['subtitle'] = 'panduan_komisi';
        
        $this->render_page('clients/panduan/komisi', $data);
    }

    public function getPanduanslide()
    {
        $data = $this->nodepath->formatPaths();

        $data['subtitle'] = 'panduan_slide';
        
        $this->render_page('clients/panduan/slide', $data);
    }

    public function getPanduancobacoba()
    {
        $data = $this->nodepath->formatPaths();

        $data['subtitle'] = 'panduan_cobacoba';
        
        $this->render_page('clients/panduan/cobacoba', $data);
    }

    public function getPanduanSimple()
    {
        $data = $this->nodepath->formatPaths();

        $data['subtitle'] = 'panduan_simple';
        
        $this->render_page('clients/panduan/sample', $data);
    }

}

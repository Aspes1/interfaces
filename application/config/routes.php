<?php defined('BASEPATH') OR exit('No direct script access allowed');


$route['app/home']         = 'LandingPage/getHome';
$route['app/profil']       = 'LandingPage/getProfil';
$route['app/testimoni']    = 'LandingPage/getTestimoni';
// $route['app/cara_daftar']  = 'LandingPage/getRegisterProcedure';
$route['app/form_daftar']  = 'LandingPage/getFormRegistration';

$route['app/pendaftaran/daftar']  = 'Pendaftaran/uploadFileGambar';

/**tambah*/
$route['app/panduan/slide'] = 'LandingPage/getPanduanSlide';
$route['app/panduan/daftar'] = 'LandingPage/getPanduanDaftar';
$route['app/panduan/aplikasi'] = 'LandingPage/getPanduanAplikasi';
$route['app/panduan/pascabayar'] = 'LandingPage/getPanduanPascabayar';
$route['app/panduan/prabayar'] = 'LandingPage/getPanduanPrabayar';
$route['app/panduan/voucher'] = 'LandingPage/getPanduanVoucher';
$route['app/panduan/teamviewer'] = 'LandingPage/getPanduanTeamviewer';
$route['app/panduan/isisaldo'] = 'LandingPage/getPanduanIsiSaldo';
$route['app/panduan/transferbtn'] = 'LandingPage/getPanduanTransferbtn';
$route['app/panduan/kolektif'] = 'LandingPage/getPanduanKolektif';
$route['app/panduan/administrasi'] = 'LandingPage/getPanduanAdministrasi';
$route['app/panduan/komisi'] = 'LandingPage/getPanduanKomisi';
$route['app/panduan/cobacoba'] = 'LandingPage/getPanduanCobacoba';
$route['app/panduan/chat'] = 'LandingPage/getPanduanChat';
$route['app/panduan/simple'] = 'LandingPage/getPanduanSimple';

$route['testing'] = 'Testing/index';

$route['default_controller']    = $route['app/home'];
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;



















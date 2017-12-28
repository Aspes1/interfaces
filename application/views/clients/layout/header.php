
<div id="top">
    <div class="container">
        <div class="row">
            <div class="col-xs-5 contact">
                <p class="hidden-sm hidden-xs">
                    <i class="fa fa-phone"></i> (061) 664-0996 &nbsp;
                    <i class="fa fa-envelope"></i> inm.helpdesk@gmail.com
                </p>

                <p class="hidden-md hidden-lg">
                    <a href="#" data-animate-hover="pulse">
                        <i class="fa fa-phone"></i>
                    </a>
                    <a href="#" data-animate-hover="pulse">
                        <i class="fa fa-envelope"></i>
                    </a>
                </p>

            </div>
            <div class="col-xs-7">
                <div class="registrasi">
                    <a href="#" data-toggle="modal" data-target="#login-modal">
                        <i class="fa fa-sign-in"></i>
                        <span class="text-uppercase">Masuk</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">
    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand home" href="index.html">
                    <img src="<?php echo site_url($basepage . 'img/company-icon/logo1.png'); ?>" alt="Logo PT. INM" class="hidden-xs hidden-sm">
                    <img src="<?php echo site_url($basepage . 'img/company-icon/logo-small2.png'); ?>" alt="Logo PT INM" class="visible-xs visible-sm">
                    <span class="sr-only">PT. INM - Home</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                </div>
            </div>

            <div class="navbar-collapse collapse" id="navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?php echo ($subtitle == 'home')? 'active' : ''; ?>">
                        <a href="<?php echo site_url('app/home'); ?>">Home</a>
                    </li>
                    <li class="<?php echo ($subtitle == 'profil')? 'active' : ''; ?>">
                        <a href="<?php echo site_url('app/profil'); ?>">Profil</a>
                    </li>

                    <li class="dropdown use-yamm yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Panduan <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>APLIKASI</h5>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url('app/panduan/simple') ?>">TEST SIMPLE</b></a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url('app/panduan/slide') ?>">PANDUAN SLIDE</b></a>
                                                </li>

                                                <li>
                                                    <a href="<?php echo site_url('app/panduan/daftar') ?>">PENDAFTARAN LOKET BARU</b></a>
                                                </li>

                                                <li>
                                                    <a href="<?php echo site_url('app/panduan/aplikasi') ?>">LOGIN APLIKASI</a>
                                                </li>

                                                <li>
                                                    <a href="<?php echo site_url('app/panduan/cobacoba') ?>">COBA</a>
                                                </li>
                                            </ul>
                                        </div>



                                        <div class="col-sm-3">
                                            <h5>TRANSAKSI PPOB</h5>
                                            <ul>

                                                <li>
                                                    <a href="<?php echo site_url('app/panduan/pascabayar') ?>">Transaksi Listrik Pascabayar</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url('app/panduan/prabayar') ?>">Transaksi Listrik Prabayar</a>
                                                </li>

                                                 <li>
                                                    <a href="<?php echo site_url('app/panduan/voucher') ?>">Transaksi Voucher/ Pulsa</a>
                                                </li>

                                                <li>
                                                    <a href="team.html">Transaksi PDAM</a>
                                                </li>
                                                <li>
                                                    <a href="team-member.html">Transaksi BPJS</a>
                                                </li>
                                                
                                            </ul>
                                        </div>

                                        <div class="col-sm-3">
                                            <h5>ISI SALDO</h5>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url('app/panduan/isisaldo') ?>">TOP UP SALDO OTOMATIS</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url('app/panduan/transferbtn') ?>">TRANSFER SALDO KE GRIYABAYAR BTN</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-sm-3">
                                            <h5>KOLEKTIF</h5>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url('app/panduan/kolektif') ?>">TAMBAH KOLEKTIF</a>
                                                </li>
                                                
                                            </ul>
                                        </div>

                                        <div class="col-sm-3">
                                            
                                            <ul>
                                               <br>
                                               <br>
                                               <br>
                                               <br>
                                               <br>
                                               <br>
                                                
                                            </ul>
                                        </div>
                                        
                                        <div class="col-sm-3">
                                            <h5>ADMINISTRASI</h5>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url('app/panduan/administrasi') ?>">LAPORAN TRANSAKSI</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url('app/panduan/administrasi') ?>">LAPORAN SINGKAT</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url('app/panduan/administrasi') ?>">LAPORAN KOLEKTIF</a>
                                                </li>
                                                
                                            </ul>
                                        </div>

                                        <div class="col-sm-3">
                                            <h5>INFO DAN CHAT</h5>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url('app/panduan/chat') ?>">PENGUMUMAN</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-sm-3">
                                            <h5>SETTING PRINTER</h5>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url('app/panduan/chat') ?>">PILIH PRINTER</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-sm-3">
                                            <h5>TEAMVIEWER</h5>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url('app/panduan/chat') ?>">DOWNLOAD TEAMVIEWER</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-sm-3">
                                            <h5>CETAK TRANSAKSI AKHIR</h5>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url('app/panduan/cetak') ?>">KLIK CETAK</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-sm-3">
                                            <h5>KOMISI</h5>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url('app/panduan/komisi') ?>">KOMISI</a>
                                                </li>
                                            </ul>
                                        </div>




                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li class="<?php echo ($subtitle == 'testimoni')? 'active' : ''; ?>">
                        <a href="<?php echo site_url('app/testimoni') ?>">Testimoni</a>
                    </li>


                    <li class="<?php echo (strpos($subtitle, '_')) ? ((explode("_", $subtitle)[1] =='pendaftaran') ? 'active' : '') : ''; ?> dropdown">
                        <!--Disable Dropdownnya-->
                        <!-- <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            Pendaftaran Loket <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="<?php echo (strpos($subtitle, '_')) ? ((explode("_", $subtitle)[0] =='cara') ? 'active' : '') : ''; ?>">
                                <a href="<?php echo site_url('app/cara_daftar'); ?>">Prosedur Pendaftaran</a>
                            </li>
                            <li class="<?php echo (strpos($subtitle, '_')) ? ((explode("_", $subtitle)[0] =='form') ? 'active' : '') : ''; ?>">
                                <a href="<?php echo site_url('app/form_daftar') ?>">Form Pendaftaran</a>
                            </li>
                        </ul> -->
                        <a href="<?php echo site_url('app/form_daftar') ?>">Form Pendaftaran</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>





<!-- 
<div id="top">
    <div class="container">
        <div class="row">
            <div class="col-xs-5 contact">
                <p class="hidden-sm hidden-xs">
                    <i class="fa fa-phone"></i> (061) 664-0996 &nbsp;
                    <i class="fa fa-envelope"></i> inm.helpdesk@gmail.com
                </p>

                <p class="hidden-md hidden-lg">
                    <a href="#" data-animate-hover="pulse">
                        <i class="fa fa-phone"></i>
                    </a>
                    <a href="#" data-animate-hover="pulse">
                        <i class="fa fa-envelope"></i>
                    </a>
                </p>

            </div>
            <div class="col-xs-7">
                <div class="registrasi">
                    <a href="#" data-toggle="modal" data-target="#login-modal">
                        <i class="fa fa-sign-in"></i>
                        <span class="text-uppercase">Masuk</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">
    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand home" href="index.html">
                    <img src="<?php echo site_url($basepage . 'img/company-icon/logo.png'); ?>" alt="Logo PT. INM" class="hidden-xs hidden-sm">
                    <img src="<?php echo site_url($basepage . 'img/company-icon/logo-small.png'); ?>" alt="Logo PT INM" class="visible-xs visible-sm">
                    <span class="sr-only">PT. INM - Home</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                </div>
            </div>

            <div class="navbar-collapse collapse" id="navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?php echo ($subtitle == 'home')? 'active' : ''; ?>">
                        <a href="<?php echo site_url('app/home'); ?>">Home</a>
                    </li>
                    <li class="<?php echo ($subtitle == 'profil')? 'active' : ''; ?>">
                        <a href="<?php echo site_url('app/profil'); ?>">Profil</a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            Panduan <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo site_url('app/panduan/aplikasi') ?>">Aplikasi</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('app/panduan/transaksi') ?>">Transaksi PPOB</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('app/panduan/voucher') ?>">Transaksi Voucher / Pulsa</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('app/panduan/isisaldo') ?>">Isi Saldo</a>
                            </li>
                           
                            <li>
                                <a href="<?php echo site_url('app/panduan/teamviewer') ?>">TeamViewer</a>
                            </li>
                            
                            
                            <li>
                                <a href="<?php echo site_url('app/panduan/kolektif') ?>">Kolektif</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('app/panduan/administrasi') ?>">Administrasi</a>
                            </li>

                            <li>
                                <a href="<?php echo site_url('app/panduan/chat') ?>">Info Dan Chat</a>
                            </li>
                             


                        </ul>
                    </li>
                    <li class="<?php echo ($subtitle == 'testimoni')? 'active' : ''; ?>">
                        <a href="#">Testimoni</a>
                    </li>


                    <li class="<?php echo (strpos($subtitle, '_')) ? ((explode("_", $subtitle)[1] =='pendaftaran') ? 'active' : '') : ''; ?> dropdown">
                        <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            Pendaftaran Loket <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="<?php echo (strpos($subtitle, '_')) ? ((explode("_", $subtitle)[0] =='cara') ? 'active' : '') : ''; ?>">
                                <a href="<?php echo site_url('app/cara_daftar'); ?>">Prosedur Pendaftaran</a>
                            </li>
                            <li class="<?php echo (strpos($subtitle, '_')) ? ((explode("_", $subtitle)[0] =='form') ? 'active' : '') : ''; ?>">
                                <a href="<?php echo site_url('app/form_daftar') ?>">Form Pendaftaran</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
-->
<!-- Top Header -->
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
                                <a href="contact.html">Transaksi</a>
                            </li>
                            <li>
                                <a href="contact2.html">Akun/Loket</a>
                            </li>
                            <li>
                                <a href="contact3.html">TeamViewer</a>
                            </li>
                            <li>
                                <a href="contact3.html">Aplikasi</a>
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
                                <a href="contact2.html">Form Pendaftaran</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Real_Agent {

    protected $_codeigniter;

    protected $_macAddress;

    protected $_platform;

    public function __construct()
    {
        
        $this->_codeigniter =& get_instance();

        $this->_codeigniter->load->library('user_agent');
        
    }

    public function getPlatform()
    {
        return $this->_codeigniter->agent->platform();
    }


    public function getRealIpAddr()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
        {   
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
        {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        return $ip;
    }

    public function getMacWindowsOS()
    {
        $_ipServer  = $_SERVER['SERVER_ADDR'];
        $_ipAddress = $this->getRealIpAddr();

        ob_start(); 

        if($_ipAddress == $_ipServer)
        {
            
            system("ipconfig /all");
            $_allCapture  = ob_get_contents();
            ob_clean(); 
        
            $_findString  = "Physical";
            $_positionMac = strpos($_allCapture, $_findString); 
            $this->_macAddress  = substr($_allCapture,($_positionMac + 36), 17); 
        }
        else
        {
            system("arp -a $_ipAddress");
            $_allCapture = ob_get_contents();
            ob_clean();
            $_subString = strstr($_allCapture, $_ipAddress);
            $_arrString = explode($_ipAddress, str_replace(" ", "", $_subString));
            $this->_macAddress = substr($_arrString[1], 0, 17);
            
        }
        
        return $this->_macAddress;
    }


    public function getMacDevices()
    {
        $this->_platform = $this->getPlatform();

        $this->_platform = explode(' ', trim($this->_platform, ' '))[0];

        switch (strtolower($this->_platform)) {
            case 'windows':
                $this->_macAddress = $this->getMacWindowsOS();
                break;
            
            case 'linux':
                $this->_macAddress = '';
                break;

            default:
                break;
        }

        return $this->_macAddress;

    }

   
}

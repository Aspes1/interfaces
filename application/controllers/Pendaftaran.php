<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
    }

    public function uploadFileGambar(){
        // $config['upload_path']   = './assets/file-gambar/upload';
        // $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size']   = '1000';
        // $config['max_width']  = '1024';
        // $config['max_height'] = '768';

        // $this->load->library('upload', $config);
        //
        // if (!$this->upload->do_upload($files)){
        //     $status = "error";
        //     $msg = $this->upload->display_errors();
        // }
        // else{
        //     $dataupload = $this->upload->data();
        //     $status = "success";
        //     $msg = $dataupload['file_name']." berhasil diupload";
        // }
        // $this->output->set_content_type('application/json')->set_output(json_encode(array('status'=>$status,'msg'=>$msg)));


        if (isset($_FILES['file_ktp']['name'])) {
            $status = true;
            $msg = 'Gambar sudah di upload';
        }
        else{
            $status = false;
            $msg = 'Gambar belum di pilih';
        }

        $this->output->set_content_type('application/json')
                     ->set_output(json_encode(array('status'=>$status,'msg'=>$msg)));
    }
}

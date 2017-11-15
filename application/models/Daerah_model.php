<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Daerah_model extends CI_Model  {
    protected $tabel_propinsi = 'provinsi';

    public function getPropinsi()
    {
        this->db->select('field1, field2');
        
    }

    public function getProv()
	{
    $sql="SELECT * FROM provinsi";
    $query=$this->db->query($sql);
    return $query->result();
	}
}

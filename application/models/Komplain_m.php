<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Komplain_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        if($id != null){
            $this->db->where('pelanggan_id', $id);

        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
	{
		$params['nama'] = $post['nama'];
        $params['nohp'] = $post['nohp'];
        $params['kelamin'] = $post['kelamin'];
        $params['keluhan'] = $post['keluhan'];
        $params['alamat'] = $post['alamat'];
        $params['tanggal'] = $post['tanggal'];
        $params['lat'] = $post['lat'];
        $params['lng'] = $post['lng'];
        $this->db->insert('pelanggan', $params);
    }
    
}
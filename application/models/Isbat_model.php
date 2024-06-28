<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Isbat_model extends CI_Model
{
    var $table_kecamatan = 'ref_kecamatan';
    var $table_kelurahan = 'ref_kelurahan';
    var $table_record = 'record';
    var $table_anak = 'anak';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_record()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->table_record);
    }

    public function get_anak()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->table_anak);
    }

    public function insert_record($data)
    {
        return $this->db->insert($this->table_record, $data);
    }

    public function insert_anak($data)
    {
        return $this->db->insert_batch($this->table_anak,$data);
    }

    public function get_all_kecamatan()
    {
        return $this->db->get($this->table_kecamatan);
    }

    public function get_kelurahan_id($id)
    {
        return $this->db->get_where($this->table_kelurahan,['id_kecamatan'=>$id]);
    }
}
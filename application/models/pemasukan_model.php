<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pemasukan_model extends CI_Model
{
    public $table = 'tabel_uangkas';
    public $id    = 'tabel_uangkas.id';

    public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where($this->id, $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_all()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
         $this->db->order_by('id', 'ASC');
        return $this->db->from('tabel_uangkas')
          ->join('tbl_user', 'tbl_user.last_name=tabel_uangkas.nama_input')
          ->get()
          ->result();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function hapus_data($where,$table)
    {
      $this->db->where($where);
      $this->db->delete($table);
    }
}

/* End of file Person_model.php */

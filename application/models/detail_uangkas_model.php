<?php
defined('BASEPATH') or exit('No direct script access allowed');

class detail_uangkas_model extends CI_Model
{
    public $table = 'tabel_uangkas';
    public $table1 = 'tbl_user';
    public $id    = 'tabel_uangkas.id';

    public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where($this->id, $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function tampil_data()
    {
        return $this->db->get('tabel_uangkas');
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
    public function get_limit($daterange)
    {   $this->db->from($this->table);
        $this->db->where('tanggal_masuk >=',$daterange[0]);
        $this->db->where('tanggal_masuk <=',$daterange[1]);
        $query = $this->db->get();
        return $query->result();
    }
    public function user()
    {
        $this->db->from($this->table1);
        $query = $this->db->get();
        return $query->result();
         $this->db->order_by('id', 'ASC');
        return $this->db->from('tbl_user')
          ->join('tabel_uangkas', 'tabel_uangkas.nama_input=tbl_user.last_name')
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
    public function laporan_pdf()
    {

    }
    public function gettahun_pemasukan()
    {
        $query = $this->db->query("SELECT YEAR(tanggal_masuk) AS tahun FROM tabel_uangkas GROUP BY YEAR(tanggal_masuk) ORDER BY YEAR(tanggal_masuk) 
        ASC ");
        return $query->result();
    }
    public function filterbytanggal_pemasukan($starttanggal,$endtanggal)
    {
        $query = $this->db->query("SELECT * FROM tabel_uangkas WHERE tanggal_masuk BETWEEN
        '$starttanggal' and '$endtanggal' ORDER BY tanggal_masuk ASC");
        return $query->result();
    }
    public function filterbybulan_pemasukan($tahun1,$startbulan,$endbulan)
    {
        $query = $this->db->query("SELECT * FROM tabel_uangkas WHERE YEAR(tanggal_masuk) = '$tahun1' 
        and MONTH(tanggal_masuk) BETWEEN
        '$startbulan' and '$endbulan' ORDER BY tanggal_masuk ASC");
        return $query->result();
    }
    public function filterbytahun_pemasukan($tahun2)
    {
        $query = $this->db->query("SELECT * FROM tabel_uangkas WHERE YEAR(tanggal_masuk) = '$tahun2' 
        ORDER BY tanggal_masuk ASC");
        return $query->result();
    }
    
}

/* End of file Person_model.php */

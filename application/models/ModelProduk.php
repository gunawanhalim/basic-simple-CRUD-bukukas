<?php 
class ModelProduk extends CI_Model{
    public function tampil_data()
    {
      return $this->db->get('produk');
    }
    public function tambah_produk($data,$table)
    {
      $this->db->insert($table,$data);
    }

    public function edit_produk($where,$table)
    {
      return $this->db->get_where($table,$where);
    }
    public function update_data($where,$data,$table)
    {
      $this->db->where($where);
      $this->db->update($table,$data);
    }
    public function hapus_data($where,$table)
    {
      $this->db->where($where);
      $this->db->delete($table);
    }

    public function find($idproduk)
    {
      $result = $this->db->where('idproduk',$idproduk)
                          ->limit(1)
                          ->get('produk');
      if ($result->num_rows()>0) {
        return $result->row();
      }else {
        return array();
      }
    }
    public function detail_prodk($idproduk)
    {
      $result = $this->db->where('idproduk',$idproduk)->get('produk');
      if ($result->num_rows() > 0) {
        return $result->result();
        # code...
      }else {
        return false;
      }
    }
}
?>
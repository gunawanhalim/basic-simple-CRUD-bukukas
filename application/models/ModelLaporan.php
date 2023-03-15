<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelLaporan extends CI_Model{
    public $table = 'tabel_uangkas';
    public $id    = 'tabel_uangkas.id';

    public function laporan_harian($tanggal,$bulan,$tahun)
    {
        // $this->db->select('*');
        // $this->db->from('tabel_uangkas');
        // // $this->db->join('pesanan','pesanan.id_invoice = invoice.id','left');
        // // $this->db->join('produk','produk.idproduk = pesanan.idproduk','left');
        // return $this->db->get()->result();
        $this->db->from($this->table);
        $this->db->where('DAY(tabel_uangkas.tanggal_masuk)',$tanggal);
        $this->db->where('MONTH(tabel_uangkas.tanggal_masuk)',$bulan);
        $this->db->where('YEAR(tabel_uangkas.tanggal_masuk)',$tahun);
        $query = $this->db->get();
        return $query->result();

    }
    public function laporan_bulanan($bulan,$tahun)
    {
        // $this->db->select('*');
        // $this->db->from('invoice');
        // $this->db->join('pesanan','pesanan.id_invoice = invoice.id','left');
        // $this->db->join('produk','produk.idproduk = pesanan.idproduk','left');
        // $this->db->where('MONTH(invoice.tgl_pesan)',$bulan);
        // $this->db->where('YEAR(invoice.tgl_pesan)',$tahun);
        // return $this->db->get()->result();
        $this->db->from($this->table);
        // $this->db->where('DAY(tabel_uangkas.tanggal_masuk)',$tanggal);
        $this->db->where('MONTH(tabel_uangkas.tanggal_masuk)',$bulan);
        $this->db->where('YEAR(tabel_uangkas.tanggal_masuk)',$tahun);
        $query = $this->db->get();
        return $query->result();

    }
}
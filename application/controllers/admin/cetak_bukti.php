<?php
defined('BASEPATH') or exit('No direct script access allowed');
class cetak_bukti extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelLaporan');
        $this->check_login();
        if ($this->session->userdata('id_role') != '1') {
            redirect('', 'refresh');
        }
    }

    public function index()
    {   
        $data            = konfigurasi('Laporan dan Bukti Pembayaran', 'Kelola Staff');
        $this->template->load('admin/layouts/template', 'admin/cetak_bukti/laporan_penjualan', $data);
        
    }
    public function laporan_harian()
    {   
        $data           = konfigurasi('Laporan dan Bukti Pembayaran', 'Kelola Staff');
        $tanggal        = $this->input->post('tanggal');
        $bulan          = $this->input->post('bulan');
        $tahun          = $this->input->post('tahun');
       
        $data = array
        (
            'title' => 'Laporan Penjualan Harian',
            'tanggal' => $tanggal,
            'bulan' => $bulan,
            'tahun' => $tahun,
            'cetak_bukti' => $this->ModelLaporan->laporan_harian($tanggal,$bulan,$tahun),
            
        );
        $this->load->view('admin/cetak_bukti/laporan_harian',$data);
        
    }
    public function laporan_bulanan()
    {
        $data           = konfigurasi('Laporan dan Bukti Pembayaran', 'Kelola Staff');
        $tanggal        = $this->input->post('tanggal');
        $bulan          = $this->input->post('bulan');
        $tahun          = $this->input->post('tahun');
       
        $data = array
        (
            'title' => 'Laporan Penjualan Bulanan',
            // 'tanggal' => $tanggal,
            'bulan' => $bulan,
            'tahun' => $tahun,
            'cetak_bukti' => $this->ModelLaporan->laporan_bulanan($bulan,$tahun),
            
        );
        $this->load->view('admin/cetak_bukti/laporan_bulanan',$data);
    }
}
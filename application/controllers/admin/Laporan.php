<?php 
defined('BASEPATH') OR exit ('No direct script access allowed ');

class Laporan extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('detail_uangkas_model');
    }
    
    public function index()
    {   
        // $data['uangkas'] = $this->detail_uangkas_model->tampil_data('tabel_uangkas')->result();
        $data            = konfigurasi('Lapran Uang Kas', 'Kelola Uang Kas');
        $data['uangkas'] = $this->detail_uangkas_model->get_all();
        // $this->template->load('admin/layouts/template', 'admin/detail_uangkas/pdf_detail_uangkas', $data);
        // $this->load->view('admin/detail_uangkas/pdf_detail_uangkas',$data);
        $this->load->library('mypdf');
        $this->mypdf->generate('admin/detail_uangkas/pdf_detail_uangkas',$data);
        
        
       
    }
    public function pdf_pemasukan()
    {   
        // $data['uangkas'] = $this->detail_uangkas_model->tampil_data('tabel_uangkas')->result();
        $data            = konfigurasi('Lapran Uang Kas', 'Kelola Uang Kas');
        $data['uangkas'] = $this->detail_uangkas_model->get_all();
        // $this->template->load('admin/layouts/template', 'admin/detail_uangkas/pdf_detail_uangkas', $data);
        // $this->load->view('admin/detail_uangkas/pdf_detail_uangkas',$data);
        $this->load->library('mypdf');
        $this->mypdf->generate('admin/pemasukan/pdf',$data);
        
        
       
    }
    public function print_pemasukan()
    {    $data = konfigurasi('Laporan', 'Kelola Uang kas');
        $data['uangkas'] = $this->detail_uangkas_model->tampil_data()->result();
        $this->load->view('admin/pemasukan/print',$data);
    }
    public function pdf_pengeluaran()
    {   
        // $data['uangkas'] = $this->detail_uangkas_model->tampil_data('tabel_uangkas')->result();
        $data            = konfigurasi('Lapran Uang Kas', 'Kelola Uang Kas');
        $data['uangkas'] = $this->detail_uangkas_model->get_all();
        // $this->template->load('admin/layouts/template', 'admin/detail_uangkas/pdf_detail_uangkas', $data);
        // $this->load->view('admin/detail_uangkas/pdf_detail_uangkas',$data);
        $this->load->library('mypdf');
        $this->mypdf->generate('admin/pengeluaran/pdf',$data);
        
        
       
    }
    public function print_pengeluaran()
    {    $data = konfigurasi('Laporan', 'Kelola Uang kas');
        $data['uangkas'] = $this->detail_uangkas_model->tampil_data()->result();
        $this->load->view('admin/pengeluaran/print',$data);
    }
}
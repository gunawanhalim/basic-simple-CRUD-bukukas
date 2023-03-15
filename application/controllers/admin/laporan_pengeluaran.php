<?php 
class laporan_pengeluaran extends MY_Controller
{   
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['laporan_pengeluaran_model','pemasukan_model']);
        $this->check_login();
        if ($this->session->userdata('id_role') != '1') {
            redirect('', 'refresh');
        }
    }
    public function index()
    {   $data            = konfigurasi('Detail Uang Kas', 'Kelola Uang Kas');
        $data['pengeluaran'] = $this->pemasukan_model->get_all();
        $data['tahun'] = $this->laporan_pengeluaran_model->gettahun_pengeluaran();
        $this->template->load('admin/layouts/template', 'admin/detail_uangkas/laporan/laporan_pengeluaran', $data);
    }

    public function add()
    {
        $data = konfigurasi('Tambah Uang Kas', 'Kelola Uang Kas');
        $this->template->load('admin/layouts/template', 'admin/detail_uangkas/create', $data);
    }
    public function create()
    {   
        date_default_timezone_set('Asia/Makassar');
        
        $nama_input                 = $this->input->post('nama_input');
        $pemasukan                  = $this->input->post('pemasukan');
        $pengeluaran                = $this->input->post('pengeluaran');
        $tanggal_masuk              = $this->input->post('tanggal_masuk');
        $tanggal_keluar             = $this->input->post('tanggal_keluar');
        $deskripsi_pemasukan        = $this->input->post('deskripsi_pemasukan');
        $deskripsi_pengeluaran      = $this->input->post('deskripsi_pengeluaran');
        $total_masuk                = $this->input->post('total_masuk');
        $total_keluar               = $this->input->post('total_keluar');
        $data = [
            'nama_input'            => $nama_input,
            'pemasukan'             => $pemasukan,
            'pengeluaran'           => $pengeluaran,
            'deskripsi_pemasukan'   => $deskripsi_pemasukan,
            'deskripsi_pengeluaran' => $deskripsi_pengeluaran,
            'tanggal_masuk'         => date('Y-m-d H:i:s'),
            'tanggal_keluar'        => date('Y-m-d H:i:s'),
        ];
        $this->laporan_pengeluaran_model->insert($data);
        redirect('admin/detail_uangkas');
    }

    public function edit($id)
    {
        $data = konfigurasi('Edit Uang kas', 'Kelola Uang kas');
        $data['uangkas'] = $this->laporan_pengeluaran_model->get_by_id($id);
        $this->template->load('admin/layouts/template', 'admin/detail_uangkas/update', $data);
    }

    public function update($id)
    {
        date_default_timezone_set('Asia/Makassar');
        $id                    = $this->input->post('id');
        $nama_input            = $this->input->post('nama_input');
        $pemasukan             = $this->input->post('pemasukan');
        $pengeluaran           = $this->input->post('pengeluaran');
        $tanggal_masuk         = $this->input->post('tanggal_masuk');
        $tanggal_keluar        = $this->input->post('tanggal_keluar');
        $deskripsi_pemasukan   = $this->input->post('deksripsi_pemasukan');
        $deskripsi_pengeluaran = $this->input->post('deksripsi_pemasukan');
        $total_masuk           = $this->input->post('total_masuk');
        $total_keluar          = $this->input->post('total_keluar');
        $data = [
            'nama_input'            => $nama_input,
            'pemasukan'             => $pemasukan,
            'pengeluaran'           => $pengeluaran,
            'deskripsi_pemasukan'   => $deskripsi_pemasukan,
            'deskripsi_pengeluaran' => $deskripsi_pengeluaran,
            'tanggal_masuk'          => date('Y-m-d H:i:s'),
            'tanggal_keluar'         => date('Y-m-d H:i:s'),
            
        ];
        
        $this->laporan_pengeluaran_model->update(['id' => $id], $data);
        redirect('admin/detail_uangkas/update');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $data['uangkas'] = $this->laporan_pengeluaran_model->hapus_data($where,'tabel_uangkas');
        redirect('admin/detail_uangkas/index');
    }
    public function print()
    {    $data = konfigurasi('Laporan', 'Kelola Uang kas');
        $data['uangkas'] = $this->laporan_pengeluaran_model->tampil_data()->result();
        $this->load->view('admin/detail_uangkas/print_uangkas',$data);
    }
    public function pdf()
    {   
        $this->load->library('dompdf_gen');
        $data['uangkas'] = $this->laporan_pengeluaran_model->tampil_data('tabel_uangkas')->result();
        $this->load->view('admin/detail_uangkas/pdf_detail_uangkas',$data);
        
        $paper_size = 'A4';
        $orientation = 'Landscapae';
        $html = $this->output->get_output();
        
        $this->dompdf->set_paper($paper_size,$orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('laporan_detail_uangkas.pdf',array('Attachment' =>0));
    }
    public function filter()
    {
      $starttanggal = $this->input->post('starttanggal');
      $endtanggal   = $this->input->post('endtanggal');
      $tahun1       = $this->input->post('tahun1');
      $startbulan   = $this->input->post('startbulan');
      $endbulan     = $this->input->post('endbulan');
      $tahun2       = $this->input->post('tahun2');
      $nilaifilter  = $this->input->post('nilaifilter');
      
      if ($nilaifilter == 1){
        $data            = konfigurasi('Laporan Pengeluaran by tanggal', 'Kelola Uang Kas');
        $data['subtitle'] = " Dari Tanggal : ".$starttanggal.' Sampai Tanggal : '.$endtanggal;
        $data['datafilter'] = $this->laporan_pengeluaran_model->filterbytanggal_pengeluaran($starttanggal,$endtanggal);
        $this->template->load('admin/layouts/template', 'admin/detail_uangkas/laporan/print_pengeluaran', $data);
      }elseif ($nilaifilter == 2){
        $data            = konfigurasi('Laporan Pengeluaran by bulan', 'Kelola Uang Kas');
        $data['subtitle'] = " Dari Bulan : ".$startbulan.' Sampai Bulan : '.$endbulan.'Tahun : '. $tahun1;
        $data['datafilter'] = $this->laporan_pengeluaran_model->filterbybulan_pengeluaran($tahun1,$startbulan,$endbulan);
        $this->template->load('admin/layouts/template', 'admin/detail_uangkas/laporan/print_pengeluaran', $data);
      }elseif ($nilaifilter == 3){
        $data            = konfigurasi('Laporan Pengeluaran by tahun', 'Kelola Uang Kas');
        $data['subtitle'] = " Tahun : ".$tahun1;
        $data['datafilter'] = $this->laporan_pengeluaran_model->filterbytahun_pengeluaran($tahun2);
        $this->template->load('admin/layouts/template', 'admin/detail_uangkas/laporan/print_pengeluaran', $data);
      }
    }
}
?>
<?php 
class Pengeluaran extends MY_Controller
{   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pemasukan_model');
        $this->check_login();
        if ($this->session->userdata('id_role') != '1') {
            redirect('', 'refresh');
        }
    }
    public function index()
    {
        $data            = konfigurasi('Pengeluaran', 'Kelola Pengeluaran');
        $data['pengeluaran'] = $this->pemasukan_model->get_all();
        $this->template->load('admin/layouts/template', 'admin/pengeluaran/index', $data);
    }

    public function add()
    {
        $data = konfigurasi('Tambah Pengeluaran', 'Kelola Pengeluaran uang kas');
        $this->template->load('admin/layouts/template', 'admin/pengeluaran/create', $data);
    }
    public function create()
    {   
        date_default_timezone_set('Asia/Makassar');
        $nama_input                      = $this->input->post('nama_input');
        $pengeluaran                     = $this->input->post('pengeluaran');
        $deskripsi_pengeluaran           = $this->input->post('deskripsi_pengeluaran');
        $tanggal_keluar                  = $this->input->post('tanggal_keluar');

        $data = [
            'nama_input'                => $nama_input,
            'pengeluaran'               => $pengeluaran, 
            'deskripsi_pengeluaran'     => $deskripsi_pengeluaran,
            'tanggal_keluar'            => date('Y-m-d H:i:s'),
        ];
        $this->pemasukan_model->insert($data);
        redirect('admin/pengeluaran');
    }

    public function edit($id)
    {
        $data           = konfigurasi('Edit Pengeluaran', 'Edit Pengeluaran');
        $data['pengeluaran'] = $this->pemasukan_model->get_by_id($id);
        $this->template->load('admin/layouts/template', 'admin/pengeluaran/update', $data);
    }

    public function update()
    {   date_default_timezone_set('Asia/Makassar');
        $id             = $this->input->post('id');
        $nama_input     = $this->input->post('nama_input');
        $pengeluaran    = $this->input->post('pengeluaran');
        $deskripsi_pengeluaran    = $this->input->post('deskripsi_pengeluaran');
        $tanggal_keluar = $this->input->post('tanggal_keluar');
        $data = [
            'id'          => $id,
            'nama_input'  => $nama_input,
            'deskripsi_pengeluaran' => $deskripsi_pengeluaran,
            'pengeluaran' => $pengeluaran,
            'tanggal_keluar' => $tanggal_keluar,
        ];
        $this->pemasukan_model->update(['id' => $id], $data);
        redirect('admin/pengeluaran');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $data['pengeluaran'] = $this->pemasukan_model->hapus_data($where,'tabel_uangkas');
        redirect('admin/pengeluaran/index');
    }
    public function print()
    {   $data = konfigurasi('Laporan', 'Kelola Uang kas');
        $data['uangkas'] = $this->detail_uangkas_model->tampil_data()->result();
        $this->load->view('admin/detail_uangkas/print_uangkas',$data);
    }
}
?>
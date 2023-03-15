<?php 
class Pemasukan extends MY_Controller
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
        $data            = konfigurasi('Pemasukan', 'Kelola Pemasukan');
        $data['pemasukan'] = $this->pemasukan_model->get_all();
        $this->template->load('admin/layouts/template', 'admin/pemasukan/index', $data);
    }

    public function add()
    {
        $data = konfigurasi('Tambah Pemasukan', 'Kelola Penambahan uang kas');
        $this->template->load('admin/layouts/template', 'admin/pemasukan/create', $data);
    }
    public function create()
    {   
        date_default_timezone_set('Asia/Makassar');
        $pemasukan               = $this->input->post('pemasukan');
        $nama_input              = $this->input->post('nama_input');
        $deskripsi_pemasukan     = $this->input->post('deskripsi_pemasukan');
        $tanggal_masuk           = $this->input->post('tanggal_masuk');

        $data = [
            'pemasukan'             => $pemasukan,
            'nama_input'            => $nama_input,
            'deskripsi_pemasukan'   => $deskripsi_pemasukan,
            'tanggal_masuk'         => $tanggal_masuk,
        ];
        $this->pemasukan_model->insert($data);
        redirect('admin/pemasukan');
    }

    public function edit($id)
    {
        $data           = konfigurasi('Edit Pemasukan', 'Kelola Edit Pemasukan');
        $data['pemasukan'] = $this->pemasukan_model->get_by_id($id);
        $this->template->load('admin/layouts/template', 'admin/pemasukan/update', $data);
    }

    public function update()
    {   date_default_timezone_set('Asia/Makassar');
        $id                      = $this->input->post('id');
        $nama_input              = $this->input->post('nama_input');
        $pemasukan               = $this->input->post('pemasukan');
        $deskripsi_pemasukan     = $this->input->post('deskripsi_pemasukan');
        $tanggal_masuk           = $this->input->post('tanggal_masuk');

        $data = [
            'id'                  => $id,
            'nama_input'          => $nama_input,
            'pemasukan'           => $pemasukan,
            'deskripsi_pemasukan' => $deskripsi_pemasukan,
            'tanggal_masuk'       => date('Y-m-d H:i:s'),
        ];
        $this->pemasukan_model->update(['id' => $id], $data);
        redirect('admin/pemasukan');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $data['pemasukan'] = $this->pemasukan_model->hapus_data($where,'tabel_uangkas');
        redirect('admin/pemasukan/index');
    }
    public function print()
    {    $data = konfigurasi('Laporan', 'Kelola Uang kas');
        $data['uangkas'] = $this->detail_uangkas_model->tampil_data()->result();
        $this->load->view('admin/detail_uangkas/print_uangkas',$data);
    }
}
?>
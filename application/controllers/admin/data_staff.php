<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class data_staff extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelStaff');
        $this->check_login();
        if ($this->session->userdata('id_role') != '1') {
            redirect('', 'refresh');
        }
    }

    public function index()
    {
        $data            = konfigurasi('Staf', 'Kelola Staff');
        $data['staff']   = $this->ModelStaff->get_all();
        $this->template->load('admin/layouts/template', 'admin/staff/index', $data);
    }

    public function add()
    {
        $data = konfigurasi('Tambah Staff', 'Tambah Staff');
        $this->template->load('admin/layouts/template', 'admin/staff/create', $data);
    }

    public function create()
    {
        $last_name    = $this->input->post('last_name');
        $email = $this->input->post('address');
        

        $data = [
            
            'last_name'    => $last_name,
            'email' => $email,
        ];
        $this->Person_model->insert($data);
        redirect('admin/staff');
    }

    public function edit($id)
    {
        $data           = konfigurasi('Edit Staff', 'Edit Staff');
        $data['staff'] = $this->ModelStaff->get_by_id($id);
        $this->template->load('admin/layouts/template', 'admin/staff/update', $data);
    }

    public function update()
    {
        $id                = $this->input->post('id');
        $last_name         = $this->input->post('last_name');
        $email             = $this->input->post('email');

        $data = [
            'id'           => $id,
            'last_name'    => $last_name,
            'email'        => $email,
        ];
        $this->ModelStaff->update(['id' => $id], $data);
        redirect('admin/data_staff/index');
    }

    public function detail($id)
    {
        $data             = konfigurasi('Detail Staff', 'Detail Staff');
        $data['staff']    = $this->ModelStaff->get_all();
        $data['staff']    = $this->ModelStaff->get_by_id($id);
        $this->template->load('admin/layouts/template', 'admin/staff/detail', $data);
    }

    public function delete($id)
    {
        $this->ModelStaff->delete($id);
        redirect('admin/data_staff');
    }
}

/* End of file Person.php */

?>
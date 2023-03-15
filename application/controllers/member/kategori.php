<?php 
class kategori extends CI_Controller{
    public function gamis()
    {
        $data['gamis'] = $this->ModelKategori->data_gamis()->result();
        $data = konfigurasi('Dashboard');
        $this->template->load('member/layouts/template', 'member/dashboard', $data);
    }
    public function rok_plisket()
    {
        $data['rok_plisket'] = $this->ModelKategori->data_rok_plisket()->result();
        $data = konfigurasi('Dashboard');
        $this->template->load('member/layouts/template', 'member/dashboard', $data);
    }
    public function pasminah()
    {
        $data['pasminah'] = $this->ModelKategori->data_pasminah()->result();
        $data = konfigurasi('Dashboard');
        $this->template->load('member/layouts/template', 'member/dashboard', $data);
    }
    public function gamis_santai()
    {
        $data['gamis_santai'] = $this->ModelKategori->data_gamis_santai()->result();
        $data = konfigurasi('Dashboard');
        $this->template->load('member/layouts/template', 'member/dashboard', $data);
    }
}
?>
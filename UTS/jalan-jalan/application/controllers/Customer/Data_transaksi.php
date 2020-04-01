<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_transaksi extends CI_Controller {

    public function berhasil()
    {
       $this->load->view('templates_customer/header');
       $this->load->view('Customer/Form_tambah');
       $this->load->view('templates_customer/footer');

    }

    public function tambah_transaksi()
    {
      $data['id_mobil'] = $_GET['id_mobil'];
      $this->load->view('templates_customer/header');
      $this->load->view('Customer/Form_tambah_transaksi', $data);
      $this->load->view('templates_customer/footer');

    }

    public function tambah_transaksi_aksi()
    {
       $this->_rules();

       if ($this->form_validation->run() == TRUE) {
           $this->tambah_transaksi();
       }else {
           $id_mobil                = $this->input->post('id_mobil');
           $nama                    = $this->input->post('nama');
           $noiden                  = $this->input->post('noiden');
           $notelp                  = $this->input->post('notelp');
           $tgl_rental              = $this->input->post('tgl_rental');
           $tgl_kembali             = $this->input->post('tgl_kembali');
           $tanggal_pengembalian    = $this->input->post('tanggal_pengembalian');
           $status_rental           = $this->input->post('status_rental');
           $status_pengembalian     = $this->input->post('status_pengembalian');

           $data = array (
               'id_mobil'               => $id_mobil,
               'nama'                   => $nama,
               'noiden'                 => $noiden,
               'notelp'                 => $notelp,
               'tgl_rental'             => $tgl_rental,
               'tgl_kembali'            => $tgl_kembali,
               'tanggal_pengembalian'   => $tanggal_pengembalian,
               'status_rental'          => $status_rental,
               'status_pengembalian'    => $status_pengembalian
           );

           $this->Mobil_model->insert_data($data);
           $this->session->set_flashdata('pesan' ,'<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Transaksi Berhasil Ditambahkan!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect ('Customer/Data_transaksi/berhasil');
       }

    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama','Nama Customer', 'required');
        $this->form_validation->set_rules('id_mobil','ID Mobil', 'required');
        $this->form_validation->set_rules('noiden','No Identitas', 'required');
        $this->form_validation->set_rules('notelp','No Telpon', 'required');
        $this->form_validation->set_rules('tgl_rental','Tanggal Pinjam', 'required');
        $this->form_validation->set_rules('tgl_kembali','Tanggal Kembali', 'required');
        $this->form_validation->set_rules('tanggal_pengembalian','Tanggal Pengembalian', 'required');
        $this->form_validation->set_rules('status_rental','Status Pengembalian', 'required');
        $this->form_validation->set_rules('status_pengembalian','Status Transaksi', 'required');
    }

}

/* End of file Data_transaksi.php */

?>

<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_transaksi extends CI_Controller {

    public function index()
    {   
        $data['rental'] = $this->Transaksi_model->get_rental();

        $this->load->view('templates_customer/headeradmin');
        $this->load->view('Admin/Data_transaksi', $data);
        $this->load->view('templates_customer/footer');

    }

    public function delete_transaksi($id) {
        $this->Transaksi_model->delete_data($id);
        $this->session->set_flashdata('pesan' ,'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data Rental Berhasil Dihapus.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect ('Admin/Data_transaksi');
    }

}

/* End of file Data_transaksi.php */

?>

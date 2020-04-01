<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index()
    {
        $this->load->view('templates_customer/header');
        $this->load->view('Customer/Contact');
        $this->load->view('templates_customer/footer');
    }
    
    public function tambah_contact()
        
    {  
        
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
           $nama        = $this->input->post('nama');
           $email       = $this->input->post('email');
           $subject     = $this->input->post('subject');
           $pesan       = $this->input->post('pesan');

           $data = array (
               'nama'       => $nama,
               'email'      => $email,
               'subject'    => $subject,
               'pesan'      => $pesan,
           );

           $this->Contact_model->insert_data($data, 'contact'); 
           $this->session->set_flashdata('pesan' ,'<div class="alert alert-success alert-dismissible fade show" role="alert">
            Pesan Berhasil Dikirim.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        
            redirect ('Contact');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama','Nama', 'required');
        $this->form_validation->set_rules('email','Email', 'required');
        $this->form_validation->set_rules('subject','Subject', 'required');
        $this->form_validation->set_rules('pesan','Message', 'required');
    }

}

/* End of file Contact.php */

?>
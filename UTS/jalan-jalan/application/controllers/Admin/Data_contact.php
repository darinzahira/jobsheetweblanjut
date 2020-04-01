<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_contact extends CI_Controller {

    public function index()
        
    {  
        $data['contact'] = $this->Contact_model->get_data('contact')->result();
        $this->load->view('templates_customer/headeradmin');
        $this->load->view('Admin/Data_contact', $data);
        $this->load->view('templates_customer/footer');
    }
    
    public function delete_contact($id){
        $where = array('id' => $id);
        $this->Contact_model->delete_data($where,'contact');
                $this->session->set_flashdata('pesan' ,'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data Contact Berhasil Dihapus.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect ('Admin/Data_contact');
        }

}

/* End of file Data_contact.php */

?>
<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
        
    {  
        $this->load->view('templates_customer/headeradmin');
        $this->load->view('Admin/Dashboard');
        $this->load->view('templates_customer/footer');
    }
    

}

/* End of file Dashboard.php */

?>
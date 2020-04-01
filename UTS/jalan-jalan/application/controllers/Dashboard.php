<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
        
    {  
        $this->load->view('templates_customer/header');
        $this->load->view('Customer/Dashboard');
        $this->load->view('templates_customer/footer');
    }
    

}

/* End of file Dashboard.php */

?>
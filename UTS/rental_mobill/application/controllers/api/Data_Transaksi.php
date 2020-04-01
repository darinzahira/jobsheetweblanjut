<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH .'libraries/REST_Controller.php';
require APPPATH .'libraries/Format.php';

class Data_Transaksi extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rental_model','rental');
    }

    public function index_get()
    {
        $id = $this->get('id_rental');
        if($id === null) {
            $rental = $this->rental->getRental();
        } else {
            $rental = $this->rental->getRental($id);
        }

            if($rental) {
                $this->response([
                    'status' => true,
                    'data' => $rental
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'id not found'
                ], REST_Controller::HTTP_NOT_FOUND);
            }
    }

    public function index_delete(){
        $id=$this->delete('id_rental');

        if($id===null) {
            $this->response([
                'status' => false,
                'message' => 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if ($this->rental->deleteRental($id) > 0){
                //ok
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'deleted.'
                ], REST_Controller::HTTP_OK);
            }else{
                //id not found
                $this->response([
                    'status' =>false,
                    'message' => 'id not found!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post(){
        $data = [

            'id_mobil'                => $this->post('id_mobil'),
            'nama'                    => $this->post('nama'),
            'noiden'                  => $this->post('noiden'),
            'notelp'                  => $this->post('notelp'),
            'tgl_rental'              => $this->post('tgl_rental'),
            'tgl_kembali'             => $this->post('tgl_kembali'),
            'tanggal_pengembalian'    => $this->post('tanggal_pengembalian'),
            'status_rental'           => $this->post('status_rental'),
            'status_pengembalian'     => $this->post('status_pengembalian'),
        ];

        if($this->rental->createRental($data) > 0){
            $this->response([
                'status' => true,
                'message' => 'new rental has been created'
            ], REST_Controller::HTTP_CREATED);
        }else{
            //id not found
            $this->response([
                'status' => false,
                'message' => 'failed to create new data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put(){
        $id = $this->put('id_rental');
        $data = [
            'id_mobil'                => $this->put('id_mobil'),
            'nama'                    => $this->put('nama'),
            'noiden'                  => $this->put('noiden'),
            'notelp'                  => $this->put('notelp'),
            'tgl_rental'              => $this->put('tgl_rental'),
            'tgl_kembali'             => $this->put('tgl_kembali'),
            'tanggal_pengembalian'    => $this->put('tanggal_pengembalian'),
            'status_rental'           => $this->put('status_rental'),
            'status_pengembalian'     => $this->put('status_pengembalian'),
           
        ];

        if($this->rental->updateRental($data, $id) > 0){
            $this->response([
                'status' => true,
                'message' => 'new rental has been updated'
            ], REST_Controller::HTTP_OK);
        }else{
            //id not found
            $this->response([
                'status' => false,
                'message' => 'failed to update data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }

    }

}

/* End of file Data_mobil.php */

?>
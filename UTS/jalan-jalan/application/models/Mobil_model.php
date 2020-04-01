<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\Client;

class Mobil_model extends CI_Model {

    public function get_data(){
        
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/rental_mobill/api/data_mobil');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];

    }

    public function ambil_id_mobil($id){

        $client = new Client();

        $response = $client->request('GET', 'http://localhost/rental_mobill/api/data_mobil', [
            'query' => [
                'id_mobil' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function get_rental(){
        
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/rental_mobill/api/data_transaksi');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];

    }

    public function ambil_id_rental($id){

        $client = new Client();

        $response = $client->request('GET', 'http://localhost/rental_mobill/api/data_transaksi', [
            'query' => [
                'id_rental' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function insert_data($data){
        $client = new Client();

        $response = $client->request('POST', 'http://localhost/rental_mobill/api/data_transaksi', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }
    
    
}

/* End of file Mobil_model.php */


?>

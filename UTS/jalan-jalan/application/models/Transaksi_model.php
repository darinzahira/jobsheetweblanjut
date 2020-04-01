<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\Client;

class Transaksi_model extends CI_Model {


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

    public function delete_data($id){
        $client = new Client();

        $response = $client->request('DELETE', 'http://localhost/rental_mobill/api/data_transaksi', [
            'form_params' => [
                'id_rental' => $id           
         ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }
    
}

/* End of file Transaksi_model.php */


?>

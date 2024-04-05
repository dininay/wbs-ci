<?php

namespace App\Controllers;

use App\Models\HomeModels;

class HomeController extends BaseController
{
    protected $homeModels;

    public function index()
    {
        return view('home/index');
    }
    // Controller pada backend untuk endpoint /searchData
    // public function searchData()
    // {
    //     $id = $this->input->get('id'); // Ambil ID dari parameter GET

    //     // Lakukan query ke database untuk mendapatkan data berdasarkan ID
    //     $query = $this->db->get_where('data', array('id' => $id));

    //     // Periksa apakah data ditemukan
    //     if ($query->num_rows() > 0) {
    //         $row = $query->row();
    //         $status = $row->status; // Ambil nilai status dari hasil query

    //         // Kirim respons JSON dengan status
    //         $response = array('status' => $status);
    //         $this->output
    //             ->set_content_type('application/json')
    //             ->set_output(json_encode($response));
    //     } else {
    //         // Jika data tidak ditemukan, kembalikan respons JSON dengan status 404 Not Found
    //         $this->output->set_status_header(404);
    //     }
    // }
    public function searchById()
    {
        // Retrieve the ID from the request
        $id = $this->request->getVar('id');

        // Load the model
        $model = new HomeModels(); // Replace YourModel with your actual model name

        // Query the database to find the record by ID
        $result = $model->getDataByid($id);

        $pattern = '/^\d{4}-wbs-\d{2}-\d{3}$/i';

        if (preg_match($pattern, $id)) {
            $response = [
                'data' => [
                    'id' => $id,
                    'status' => $result ? $result['status'] : 'ID not found'
                ]
            ];
        } else {
            $response = [
                'message' => 404,
                'result' => 'Format ID is not valid.',

            ]; 
        }

        $this->response->setJSON($response);

        return $this->response;
    }
}

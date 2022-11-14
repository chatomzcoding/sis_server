<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WsController extends Controller
{
    public function kirimdata($sesi)
    {
        switch ($sesi) {
            case 'one':
                echo 'kirim data one';
                $client = new Client(['verify' => false]);
                $apiURL = 'https://sis.cikarastudio.com/api/log';
                $postInput = [
                    'userid' => '4',
                    'waktu' => '2022-06-16 11:46:45',
                ];

                        
                $headers = [
                    'X-header' => 'value'
                ];

                $client->request('GET', 'https://somewebsite.com', ['verify' => false]);
          
                $response = Http::withHeaders($headers)->post($apiURL, $postInput);
          
                // $statusCode = $response->status();
                // $responseBody = json_decode($response->getBody(), true);
             
                // dd($responseBody);
                break;
            case 'list':
                echo 'list';
                $api_url = 'https://sis.cikarastudio.com/api/log';

                // Read JSON file
                $json_data = file_get_contents($api_url);
                
                // Decode JSON data into PHP array
                $response_data = json_decode($json_data);

                dd($response_data);
                
                // All user data exists in 'data' object
                $user_data = $response_data->data;
               
                break;
            default:
                # code...
                break;
        }
    }
}

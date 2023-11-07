<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;



class JsonPlaceholderController extends Controller
{
    public function getData()
    {

        $client = new Client();
        $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/users');

        $statusCode = $response->getStatusCode();
        $content = $response->getBody();

        $data = json_decode($content, true);

        // Puedes devolver la data en una vista o hacer lo que necesites con ella
        return view('index', ['data' => $data]);

    }
    /*
    public function getDataPosts()
    {

        $client = new Client();
        $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts');

        $statusCode = $response->getStatusCode();
        $content = $response->getBody();

        $data = json_decode($content, true);

        // Puedes devolver la data en una vista o hacer lo que necesites con ella
        return view('index', ['data' => $data]);



    }
    */

    public function realTime(){
        $queryString = http_build_query([
            'access_key' => '0ad5e857cc8540b5c6786847185af4de'
        ]);

        $client = new Client();
        $response = $client->get('https://api.aviationstack.com/v1/flights?' . $queryString);
        $api_result = json_decode($response->getBody(), true);

        $flights = [];
        foreach ($api_result['results'] as $flight) {
            if (!$flight['live']['is_ground']) {
                $flights[] = [
                    'airline_name' => $flight['airline']['name'],
                    'flight_iata' => $flight['flight']['iata'],
                    'departure_airport' => $flight['departure']['airport'],
                    'departure_iata' => $flight['departure']['iata'],
                    'arrival_airport' => $flight['arrival']['airport'],
                    'arrival_iata' => $flight['arrival']['iata']
                ];
            }
        }

        return view('real-time', ['flights' => $flights]);
    }
}


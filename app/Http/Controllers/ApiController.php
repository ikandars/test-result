<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Sum an array.
     *
     * @param  Request  $request
     * @return Array
     */
    public function result(Request $request)
    {
        $numbers = $request->input('numbers');

        if(!$numbers){
            $json = [
                'status' => 'error',
                'message' => 'Please check your request format.'
            ];

            return response($json, 400);
        }

        return ['total' => array_sum($numbers)];
    }
}
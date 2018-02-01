<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class ApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testResult()
    {   
        $request = new Request();
        $request->merge(['numbers' => [1,2,6,10,8]]);

        $api = new ApiController();

        $this->assertEquals(27, $api->result($request)['total']);
    }

    public function testFailed()
    {
        $request = new Request();
        $request->merge(['foo' => 'bar']);

        $api = new ApiController();
        $response = $api->result($request);
        
        $this->assertEquals('error', $response->original['status']);
    }
}

<?php

namespace Amk\IpApi\Tests;

use Amk\IpApi\IPAPI;
use Illuminate\Http\Request;
use Amk\IpApi\Tests\TestCase;

class IPTest extends TestCase
{

    public function testIPResponseJson(){
        $ip_api = new IPAPI();    
        $response = $ip_api->detect();
        $this->assertJson($response);
    }

    public function testIPWithValidArg(){
        $ip_api = new IPAPI();    
        $response = $ip_api->detect('104.28.251.152');
        $this->assertJson($response);
    }

    public function testIPRequest(){
        $request = $this->createRequest();
        $this->assertJson($request->ipApi());
    }

    private function createRequest(){
        return Request::create('/some/endpoint', 'GET');
    }


    

}
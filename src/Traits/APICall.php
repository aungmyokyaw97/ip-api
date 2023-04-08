<?php

namespace Amk\IpApi\Traits;
use Illuminate\Support\Facades\Http;

trait APICall {

    /**
     * [Description for prepareRequest]
     *
     * @param mixed $ip
     * 
     * @return [type]
     * 
     */
    protected function prepareRequest($ip)
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->get('http://ip-api.com/php/'.$ip.'?fields=status,message,continent,continentCode,country,countryCode,region,regionName,city,district,zip,lat,lon,timezone,currency,isp,org,as,asname,reverse,mobile,proxy,hosting,query');
        
        return $this->getBody($response);
    }

    /**
     * [Description for getBody]
     *
     * @param mixed $response
     * 
     * @return [type]
     * 
     */
    protected function getBody($response){
        return json_encode(unserialize($response->body()));
    }
    

}
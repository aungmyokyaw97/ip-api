<?php
namespace Amk\IpApi;
use Amk\IpApi\Traits\APICall;

class IPAPI
{
    use APICall;

    /**
     * [Description for $ip]
     *
     * @var [type]
     */
    protected $ip;

    /**
     * [Description for __construct]
     *
     * 
     */
    function __construct()
    {
        $this->ip = request()->ip();
    }

    /**
     * [Description for detect]
     *
     * @param null $ip
     * 
     * @return [type]
     * 
     */
    public function detect($ip = null){
        $ip = $ip ?? $this->ip;
        return $this->prepareRequest($ip);
    }

    /**
     * [Description for ip]
     *
     * @return [type]
     * 
     */
    public function ip(){
        return $this->ip;
    }

    


}
<?php 

namespace Amk\IpApi\Facades;

use Illuminate\Support\Facades\Facade;

class IPAPI extends Facade {

    protected static function getFacadeAccessor() { 
        return \Amk\IpApi\IPAPI::class; 
    }

}
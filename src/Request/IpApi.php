<?php

namespace Amk\IpApi\Request;

use Amk\IpApi\IPAPI as IPAPIClass;

class IpApi
{

    public function __invoke()
    {
        return function () {
            return (new IPAPIClass())->detect();
        };
    }
}
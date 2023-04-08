<?php

namespace Amk\IpApi\Tests;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [\Amk\IpApi\Provider\IPAPIServiceProvider::class];
    }


}
<?php

use SohelRana820\Forecast\Forecast;

class ForecastTests extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function testRequest()
    {
        $forecast = new Forecast();
        var_dump($forecast->request());
    }
}
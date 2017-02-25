<?php

namespace SohelRana820\Forecast;

class Forecast
{
    /**
     * @var null
     */
    private $response = null;

    /**
     * @var
     */
    protected $secretKey;

    /**
     * @var string
     */
    protected $baseUrl = 'https://api.darksky.net/forecast/';

    /**
     * @var null
     */
    protected $latitude = null;

    /**
     * @var null
     */
    protected $longitude = null;

    /**
     * @var
     */
    protected $timezone;

    /**
     * @var array
     */
    protected $options = [];

    /**
     * Result constructor.
     */
    public function __construct($secretKey = null)
    {
        $this->secretKey = $secretKey;
    }

    /**
     * @return $this|null
     */
    public function request()
    {
        try {
            $client = new \GuzzleHttp\Client(['base_uri' => $this->baseUrl]);
            $response = $client->request('GET', $this->buildUrl());
            $this->response = json_decode($response->getBody()->getContents(), true);
        } catch (\Exception $e) {
            return null;
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * @return string
     */
    private function buildUrl()
    {
        $url = $this->secretKey . '/' . $this->getLatitude();
        $url .= ','. $this->getLongitude() . '?'.
        $url .= http_build_query($this->options);
        return $url;
    }

    /**
     * @return mixed
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * @param mixed $secretKey
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
    }

    /**
     * @return null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param null $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param null $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getTimezone()
    {
        return $this->timezone = $this->response['timezone'];
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * @return mixed
     */
    public function getCurrentlyData()
    {
        return $this->response['currently'];
    }

    /**
     * @return mixed
     */
    public function getHourlyData()
    {
        return $this->response['hourly'];
    }

    /**
     * @return mixed
     */
    public function getDailyData()
    {
        return $this->response['daily'];
    }

    /**
     * @return mixed
     */
    public function getFlags()
    {
        return $this->response['flags'];
    }
}

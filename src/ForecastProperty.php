<?php

namespace SohelRana820\Forecast;


class ForecastProperty
{
    /**
     * @var
     */
    protected $time;
    /**
     * @var
     */
    protected $summary;
    /**
     * @var
     */
    protected $icon;
    /**
     * @var
     */
    protected $sunriseTime;
    /**
     * @var
     */
    protected $sunsetTime;
    /**
     * @var
     */
    protected $moonPhase;
    /**
     * @var
     */
    protected $nearestStormDistance;
    /**
     * @var
     */
    protected $precipIntensity;
    /**
     * @var
     */
    protected $precipProbability;
    /**
     * @var
     */
    protected $precipIntensityError;
    /**
     * @var
     */
    protected $precipIntensityMax;
    /**
     * @var
     */
    protected $precipIntensityMaxTime;
    /**
     * @var
     */
    protected $precipType;
    /**
     * @var
     */
    protected $temperature;
    /**
     * @var
     */
    protected $temperatureUnit;
    /**
     * @var
     */
    protected $apparentTemperature;
    /**
     * @var
     */
    protected $temperatureMin;
    /**
     * @var
     */
    protected $temperatureMinTime;
    /**
     * @var
     */
    protected $temperatureMax;
    /**
     * @var
     */
    protected $temperatureMaxTime;
    /**
     * @var
     */
    protected $apparentTemperatureMin;
    /**
     * @var
     */
    protected $apparentTemperatureMinTime;
    /**
     * @var
     */
    protected $apparentTemperatureMax;
    /**
     * @var
     */
    protected $apparentTemperatureMaxTime;
    /**
     * @var
     */
    protected $dewPoint;
    /**
     * @var
     */
    protected $humidity;
    /**
     * @var
     */
    protected $windSpeed;
    /**
     * @var
     */
    protected $windBearing;
    /**
     * @var
     */
    protected $visibility;
    /**
     * @var
     */
    protected $cloudCover;
    /**
     * @var
     */
    protected $pressure;
    /**
     * @var
     */
    protected $ozone;

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param mixed $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    /**
     * @return mixed
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param mixed $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    /**
     * @return mixed
     */
    public function getSunriseTime()
    {
        return $this->sunriseTime;
    }

    /**
     * @param mixed $sunriseTime
     */
    public function setSunriseTime($sunriseTime)
    {
        $this->sunriseTime = $sunriseTime;
    }

    /**
     * @return mixed
     */
    public function getSunsetTime()
    {
        return $this->sunsetTime;
    }

    /**
     * @param mixed $sunsetTime
     */
    public function setSunsetTime($sunsetTime)
    {
        $this->sunsetTime = $sunsetTime;
    }

    /**
     * @return mixed
     */
    public function getMoonPhase()
    {
        return $this->moonPhase;
    }

    /**
     * @param mixed $moonPhase
     */
    public function setMoonPhase($moonPhase)
    {
        $this->moonPhase = $moonPhase;
    }

    /**
     * @return mixed
     */
    public function getNearestStormDistance()
    {
        return $this->nearestStormDistance;
    }

    /**
     * @param mixed $nearestStormDistance
     */
    public function setNearestStormDistance($nearestStormDistance)
    {
        $this->nearestStormDistance = $nearestStormDistance;
    }

    /**
     * @return mixed
     */
    public function getPrecipIntensity()
    {
        return $this->precipIntensity;
    }

    /**
     * @param mixed $precipIntensity
     */
    public function setPrecipIntensity($precipIntensity)
    {
        $this->precipIntensity = $precipIntensity;
    }

    /**
     * @return mixed
     */
    public function getPrecipProbability()
    {
        return $this->precipProbability;
    }

    /**
     * @param mixed $precipProbability
     */
    public function setPrecipProbability($precipProbability)
    {
        $this->precipProbability = $precipProbability;
    }

    /**
     * @return mixed
     */
    public function getPrecipIntensityError()
    {
        return $this->precipIntensityError;
    }

    /**
     * @param mixed $precipIntensityError
     */
    public function setPrecipIntensityError($precipIntensityError)
    {
        $this->precipIntensityError = $precipIntensityError;
    }

    /**
     * @return mixed
     */
    public function getPrecipIntensityMax()
    {
        return $this->precipIntensityMax;
    }

    /**
     * @param mixed $precipIntensityMax
     */
    public function setPrecipIntensityMax($precipIntensityMax)
    {
        $this->precipIntensityMax = $precipIntensityMax;
    }

    /**
     * @return mixed
     */
    public function getPrecipIntensityMaxTime()
    {
        return $this->precipIntensityMaxTime;
    }

    /**
     * @param mixed $precipIntensityMaxTime
     */
    public function setPrecipIntensityMaxTime($precipIntensityMaxTime)
    {
        $this->precipIntensityMaxTime = $precipIntensityMaxTime;
    }

    /**
     * @return mixed
     */
    public function getPrecipType()
    {
        return $this->precipType;
    }

    /**
     * @param mixed $precipType
     */
    public function setPrecipType($precipType)
    {
        $this->precipType = $precipType;
    }

    /**
     * @return mixed
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @param mixed $temperature
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
    }

    /**
     * @return mixed
     */
    public function getTemperatureUnit()
    {
        return $this->temperatureUnit;
    }

    /**
     * @param mixed $temperatureUnit
     */
    public function setTemperatureUnit($temperatureUnit)
    {
        $this->temperatureUnit = $temperatureUnit;
    }

    /**
     * @return mixed
     */
    public function getApparentTemperature()
    {
        return $this->apparentTemperature;
    }

    /**
     * @param mixed $apparentTemperature
     */
    public function setApparentTemperature($apparentTemperature)
    {
        $this->apparentTemperature = $apparentTemperature;
    }

    /**
     * @return mixed
     */
    public function getTemperatureMin()
    {
        return $this->temperatureMin;
    }

    /**
     * @param mixed $temperatureMin
     */
    public function setTemperatureMin($temperatureMin)
    {
        $this->temperatureMin = $temperatureMin;
    }

    /**
     * @return mixed
     */
    public function getTemperatureMinTime()
    {
        return $this->temperatureMinTime;
    }

    /**
     * @param mixed $temperatureMinTime
     */
    public function setTemperatureMinTime($temperatureMinTime)
    {
        $this->temperatureMinTime = $temperatureMinTime;
    }

    /**
     * @return mixed
     */
    public function getTemperatureMax()
    {
        return $this->temperatureMax;
    }

    /**
     * @param mixed $temperatureMax
     */
    public function setTemperatureMax($temperatureMax)
    {
        $this->temperatureMax = $temperatureMax;
    }

    /**
     * @return mixed
     */
    public function getTemperatureMaxTime()
    {
        return $this->temperatureMaxTime;
    }

    /**
     * @param mixed $temperatureMaxTime
     */
    public function setTemperatureMaxTime($temperatureMaxTime)
    {
        $this->temperatureMaxTime = $temperatureMaxTime;
    }

    /**
     * @return mixed
     */
    public function getApparentTemperatureMin()
    {
        return $this->apparentTemperatureMin;
    }

    /**
     * @param mixed $apparentTemperatureMin
     */
    public function setApparentTemperatureMin($apparentTemperatureMin)
    {
        $this->apparentTemperatureMin = $apparentTemperatureMin;
    }

    /**
     * @return mixed
     */
    public function getApparentTemperatureMinTime()
    {
        return $this->apparentTemperatureMinTime;
    }

    /**
     * @param mixed $apparentTemperatureMinTime
     */
    public function setApparentTemperatureMinTime($apparentTemperatureMinTime)
    {
        $this->apparentTemperatureMinTime = $apparentTemperatureMinTime;
    }

    /**
     * @return mixed
     */
    public function getApparentTemperatureMax()
    {
        return $this->apparentTemperatureMax;
    }

    /**
     * @param mixed $apparentTemperatureMax
     */
    public function setApparentTemperatureMax($apparentTemperatureMax)
    {
        $this->apparentTemperatureMax = $apparentTemperatureMax;
    }

    /**
     * @return mixed
     */
    public function getApparentTemperatureMaxTime()
    {
        return $this->apparentTemperatureMaxTime;
    }

    /**
     * @param mixed $apparentTemperatureMaxTime
     */
    public function setApparentTemperatureMaxTime($apparentTemperatureMaxTime)
    {
        $this->apparentTemperatureMaxTime = $apparentTemperatureMaxTime;
    }

    /**
     * @return mixed
     */
    public function getDewPoint()
    {
        return $this->dewPoint;
    }

    /**
     * @param mixed $dewPoint
     */
    public function setDewPoint($dewPoint)
    {
        $this->dewPoint = $dewPoint;
    }

    /**
     * @return mixed
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * @param mixed $humidity
     */
    public function setHumidity($humidity)
    {
        $this->humidity = $humidity;
    }

    /**
     * @return mixed
     */
    public function getWindSpeed()
    {
        return $this->windSpeed;
    }

    /**
     * @param mixed $windSpeed
     */
    public function setWindSpeed($windSpeed)
    {
        $this->windSpeed = $windSpeed;
    }

    /**
     * @return mixed
     */
    public function getWindBearing()
    {
        return $this->windBearing;
    }

    /**
     * @param mixed $windBearing
     */
    public function setWindBearing($windBearing)
    {
        $this->windBearing = $windBearing;
    }

    /**
     * @return mixed
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @param mixed $visibility
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    }

    /**
     * @return mixed
     */
    public function getCloudCover()
    {
        return $this->cloudCover;
    }

    /**
     * @param mixed $cloudCover
     */
    public function setCloudCover($cloudCover)
    {
        $this->cloudCover = $cloudCover;
    }

    /**
     * @return mixed
     */
    public function getPressure()
    {
        return $this->pressure;
    }

    /**
     * @param mixed $pressure
     */
    public function setPressure($pressure)
    {
        $this->pressure = $pressure;
    }

    /**
     * @return mixed
     */
    public function getOzone()
    {
        return $this->ozone;
    }

    /**
     * @param mixed $ozone
     */
    public function setOzone($ozone)
    {
        $this->ozone = $ozone;
    }
}
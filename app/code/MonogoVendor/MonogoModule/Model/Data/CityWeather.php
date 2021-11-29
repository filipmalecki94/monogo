<?php

namespace MonogoVendor\MonogoModule\Model\Data;

use Magento\Framework\DataObject;
use MonogoVendor\MonogoModule\Api\Data\CityWeatherInterface;

/**
 * Class CityWeather
 * @package MonogoVendor\MonogoModule\Model\Data
 */
class CityWeather extends DataObject implements CityWeatherInterface
{
    /**
     * @inheirtDoc
     */
    public function getId(): int
    {
        return $this->getData(static::FIELD_ID);
    }

    /**
     * @inheirtDoc
     */
    public function setId(int $id): CityWeatherInterface
    {
        return $this->setData(static::FIELD_ID, $id);
    }

    /**
     * @inheirtDoc
     */
    public function getCity(): string
    {
        return $this->getData(static::FIELD_CITY);
    }

    /**
     * @inheirtDoc
     */
    public function setCity(string $city): CityWeatherInterface
    {
        return $this->setData(static::FIELD_CITY, $city);
    }

    /**
     * @inheirtDoc
     */
    public function getWeatherId(): ?int
    {
        return $this->getData(static::FIELD_WEATHER_ID);
    }

    /**
     * @inheirtDoc
     */
    public function setWeatherId(?int $weatherId): CityWeatherInterface
    {
        return $this->setData(static::FIELD_WEATHER_ID, $weatherId);
    }

    /**
     * @inheirtDoc
     */
    public function getMain(): ?string
    {
        return $this->getData(static::FIELD_MAIN);
    }

    /**
     * @inheirtDoc
     */
    public function setMain(?string $main): CityWeatherInterface
    {
        return $this->setData(static::FIELD_MAIN, $main);
    }

    /**
     * @inheirtDoc
     */
    public function getDescription(): ?string
    {
        return $this->getData(static::FIELD_DESCRIPTION);
    }

    /**
     * @inheirtDoc
     */
    public function setDescription(?string $description): CityWeatherInterface
    {
        return $this->setData(static::FIELD_DESCRIPTION, $description);
    }

    /**
     * @inheirtDoc
     */
    public function getIcon(): ?string
    {
        return $this->getData(static::FIELD_ICON);
    }

    /**
     * @inheirtDoc
     */
    public function setIcon(?string $icon): CityWeatherInterface
    {
        return $this->setData(static::FIELD_ICON, $icon);
    }

    /**
     * @inheirtDoc
     */
    public function getTemperature(): float
    {
        return $this->getData(static::FIELD_TEMPERATURE);
    }

    /**
     * @inheirtDoc
     */
    public function setTemperature(float $temperature): CityWeatherInterface
    {
        return $this->setData(static::FIELD_TEMPERATURE, $temperature);
    }

    /**
     * @inheirtDoc
     */
    public function getFeelsLike(): ?float
    {
        return $this->getData(static::FIELD_FEELS_LIKE);
    }

    /**
     * @inheirtDoc
     */
    public function setFeelsLike(?float $feelsLike): CityWeatherInterface
    {
        return $this->setData(static::FIELD_FEELS_LIKE, $feelsLike);
    }

    /**
     * @inheirtDoc
     */
    public function getPressure(): ?int
    {
        return $this->getData(static::FIELD_PRESSURE);
    }

    /**
     * @inheirtDoc
     */
    public function setPressure(?int $pressure): CityWeatherInterface
    {
        return $this->setData(static::FIELD_PRESSURE, $pressure);
    }

    /**
     * @inheirtDoc
     */
    public function getWindSpeed(): ?float
    {
        return $this->getData(static::FIELD_WIND_SPEED);
    }

    /**
     * @inheirtDoc
     */
    public function setWindSpeed(?float $windSpeed): CityWeatherInterface
    {
        return $this->setData(static::FIELD_WIND_SPEED, $windSpeed);
    }

    /**
     * @inheirtDoc
     */
    public function getClouds(): ?int
    {
        return $this->getData(static::FIELD_CLOUDS);
    }

    /**
     * @inheirtDoc
     */
    public function setClouds(?int $clouds): CityWeatherInterface
    {
        return $this->setData(static::FIELD_CLOUDS, $clouds);
    }

    /**
     * @inheirtDoc
     */
    public function getSnow(): ?float
    {
        return $this->getData(static::FIELD_SNOW);
    }

    /**
     * @inheirtDoc
     */
    public function setSnow(?float $snow): CityWeatherInterface
    {
        return $this->setData(static::FIELD_SNOW, $snow);
    }

    /**
     * @inheirtDoc
     */
    public function getRain(): ?float
    {
        return $this->getData(static::FIELD_RAIN);
    }

    /**
     * @inheirtDoc
     */
    public function setRain(?float $rain): CityWeatherInterface
    {
        return $this->setData(static::FIELD_RAIN, $rain);
    }

    /**
     * @inheirtDoc
     */
    public function getSunrise(): ?int
    {
        return $this->getData(static::FIELD_SUNRISE);
    }

    /**
     * @inheirtDoc
     */
    public function setSunrise(?int $sunrise): CityWeatherInterface
    {
        return $this->setData(static::FIELD_SUNRISE, $sunrise);
    }

    /**
     * @inheirtDoc
     */
    public function getSunset(): ?int
    {
        return $this->getData(static::FIELD_SUNSET);
    }

    /**
     * @inheirtDoc
     */
    public function setSunset(?int $sunset): CityWeatherInterface
    {
        return $this->setData(static::FIELD_SUNSET, $sunset);
    }
}

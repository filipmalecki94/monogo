<?php

namespace MonogoVendor\MonogoModule\Api\Data;

/**
 * Interface CityWeatherInterface
 * @package MonogoVendor\MonogoModule\Api\Data
 */
interface CityWeatherInterface
{
    /**
     * @var string string
     */
    public const FIELD_ID = 'id';

    /**
     * @var string
     */
    public const FIELD_CITY = 'city';

    /**
     * @var string
     */
    public const FIELD_WEATHER_ID = 'weather_id';

    /**
     * @var string
     */
    public const FIELD_MAIN = 'main';

    /**
     * @var string
     */
    public const FIELD_DESCRIPTION = 'description';

    /**
     * @var string
     */
    public const FIELD_ICON = 'icon';

    /**
     * @var string
     */
    public const FIELD_TEMPERATURE = 'temperature';

    /**
     * @var string
     */
    public const FIELD_FEELS_LIKE = 'feels_like';

    /**
     * @var string
     */
    public const FIELD_PRESSURE = 'pressure';

    /**
     * @var string
     */
    public const FIELD_WIND_SPEED = 'wind_speed';

    /**
     * @var string
     */
    public const FIELD_CLOUDS = 'clouds';

    /**
     * @var string
     */
    public const FIELD_SNOW = 'snow';

    /**
     * @var string
     */
    public const FIELD_RAIN = 'rain';

    /**
     * @var string
     */
    public const FIELD_SUNRISE = 'sunrise';

    /**
     * @var string
     */
    public const FIELD_SUNSET = 'sunset';

    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     * @return CityWeatherInterface
     */
    public function setId(int $id): CityWeatherInterface;

    /**
     * @return string
     */
    public function getCity(): string;

    /**
     * @param string $city
     * @return CityWeatherInterface
     */
    public function setCity(string $city): CityWeatherInterface;

    /**
     * @return int|null
     */
    public function getWeatherId(): ?int;

    /**
     * @param int|null $weatherId
     * @return CityWeatherInterface
     */
    public function setWeatherId(?int $weatherId): CityWeatherInterface;

    /**
     * @return string|null
     */
    public function getMain(): ?string;

    /**
     * @param string|null $main
     * @return CityWeatherInterface
     */
    public function setMain(?string $main): CityWeatherInterface;

    /**
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * @param string|null $description
     * @return CityWeatherInterface
     */
    public function setDescription(?string $description): CityWeatherInterface;

    /**
     * @return string|null
     */
    public function getIcon(): ?string;

    /**
     * @param string|null $icon
     * @return CityWeatherInterface
     */
    public function setIcon(?string $icon): CityWeatherInterface;

    /**
     * @return float
     */
    public function getTemperature(): float;

    /**
     * @param float $temperature
     * @return CityWeatherInterface
     */
    public function setTemperature(float $temperature): CityWeatherInterface;

    /**
     * @return float|null
     */
    public function getFeelsLike(): ?float;

    /**
     * @param float|null $feelsLike
     * @return CityWeatherInterface
     */
    public function setFeelsLike(?float $feelsLike): CityWeatherInterface;

    /**
     * @return int|null
     */
    public function getPressure(): ?int;

    /**
     * @param int|null $pressure
     * @return CityWeatherInterface
     */
    public function setPressure(?int $pressure): CityWeatherInterface;

    /**
     * @return float|null
     */
    public function getWindSpeed(): ?float;

    /**
     * @param float|null $windSpeed
     * @return CityWeatherInterface
     */
    public function setWindSpeed(?float $windSpeed): CityWeatherInterface;

    /**
     * @return int|null
     */
    public function getClouds(): ?int;

    /**
     * @param int|null $clouds
     * @return CityWeatherInterface
     */
    public function setClouds(?int $clouds): CityWeatherInterface;

    /**
     * @return float|null
     */
    public function getSnow(): ?float;

    /**
     * @param float|null $snow
     * @return CityWeatherInterface
     */
    public function setSnow(?float $snow): CityWeatherInterface;

    /**
     * @return float|null
     */
    public function getRain(): ?float;

    /**
     * @param float|null $rain
     * @return CityWeatherInterface
     */
    public function setRain(?float $rain): CityWeatherInterface;

    /**
     * @return int|null
     */
    public function getSunrise(): ?int;

    /**
     * @param int|null $sunrise
     * @return CityWeatherInterface
     */
    public function setSunrise(?int $sunrise): CityWeatherInterface;

    /**
     * @return int|null
     */
    public function getSunset(): ?int;

    /**
     * @param int|null $sunset
     * @return CityWeatherInterface
     */
    public function setSunset(?int $sunset): CityWeatherInterface;
}

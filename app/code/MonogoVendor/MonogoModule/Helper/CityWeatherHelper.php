<?php

namespace MonogoVendor\MonogoModule\Helper;

use Exception;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\HTTP\Client\Curl;
use MonogoVendor\MonogoModule\Api\Data\CityWeatherInterface;
use MonogoVendor\MonogoModule\Model\CityWeatherModel;
use MonogoVendor\MonogoModule\Model\CityWeatherModelFactory;
use MonogoVendor\MonogoModule\Model\Data\CityWeather;
use MonogoVendor\MonogoModule\Model\Data\CityWeatherFactory;
use MonogoVendor\MonogoModule\Model\ResourceModel\CityWeatherResource;

/**
 * Class CityWeatherHelper
 * @package MonogoVendor\MonogoModule\Helper
 */
class CityWeatherHelper extends AbstractHelper
{
    /**
     * @var string
     */
    public const DEFAULT_CITY = 'Lublin';

    /**
     * @var string
     */
    public const OPENWEATHERMAP_URL = 'api.openweathermap.org/data/2.5/weather?q=%s&appid=%s&units=metric';

    /**
     * @var string
     */
    public const OPENWEATHERMAP_API_KEY = 'efbf0f795b33bce2ff116afe993aafab';

    /**
     * @var int
     */
    public const OK_STATUS = 200;

    /**
     * @var Curl
     */
    protected $curl;

    /**
     * @var CityWeatherFactory
     */
    protected $cityWeatherFactory;

    /**
     * @var CityWeatherResource
     */
    protected $cityWeatherResource;

    /**
     * @var CityWeatherModelFactory
     */
    protected $cityWeatherModelFactory;

    /**
     * @param Context $context
     * @param Curl $curl
     * @param CityWeatherFactory $cityWeatherFactory
     * @param CityWeatherResource $cityWeatherResource
     * @param CityWeatherModelFactory $cityWeatherModelFactory
     */
    public function __construct(
        Context                 $context,
        Curl                    $curl,
        CityWeatherFactory      $cityWeatherFactory,
        CityWeatherResource     $cityWeatherResource,
        CityWeatherModelFactory $cityWeatherModelFactory
    )
    {
        parent::__construct($context);
        $this->curl = $curl;
        $this->cityWeatherFactory = $cityWeatherFactory;
        $this->cityWeatherResource = $cityWeatherResource;
        $this->cityWeatherModelFactory = $cityWeatherModelFactory;
    }

    /**
     * @param string $city
     * @return CityWeather|null
     */
    public function fetchWeather(string $city = self::DEFAULT_CITY): ?CityWeather
    {
        try {
            $cityWeather = $this->getCityWeatherData($city);

            /** @var CityWeatherModel $model */
            $model = $this->cityWeatherModelFactory->create();
            $model->setData($cityWeather->getData());

            $this->cityWeatherResource->save($model);
        } catch (Exception $e) {
            $this->_logger->error($e->getMessage());
        }

        return $cityWeather ?? null;
    }

    /**
     * @param string $city
     * @return CityWeather
     * @throws Exception
     */
    public function getCityWeatherData(string $city): CityWeather
    {
        $this->curl->get(
            sprintf(
                static::OPENWEATHERMAP_URL,
                $city,
                static::OPENWEATHERMAP_API_KEY
            )
        );
        if ($this->curl->getStatus() !== static::OK_STATUS) {
            throw new Exception(__('Could not fetch weather data from api.openweathermap.org'));
        }

        if ($weatherData = json_decode($this->curl->getBody(), true)) {
            $cityWeather = $this->getHydratedObject(array_merge($weatherData, ['city' => $city]));
        } else {
            throw new Exception(__('Weather data was fetch, but dataset is empty'));
        }

        return $cityWeather;
    }

    /**
     * @param array $weatherData
     * @return CityWeather
     */
    protected function getHydratedObject(array $weatherData): CityWeather
    {
        $weather = array_shift($weatherData['weather']) ?? [];
        $sys = $weatherData['sys'] ?? [];
        $main = $weatherData['main'] ?? [];
        $wind = $weatherData['wind'] ?? [];
        $clouds = $weatherData['clouds'] ?? [];
        $snow = isset($weatherData['snow']['1h']) ? ['snow' => $weatherData['snow']['1h']] : [];
        $rain = isset($weatherData['rain']['1h']) ? ['rain' => $weatherData['rain']['1h']] : [];

        /** @var CityWeather $cityWeather */
        $cityWeather = $this->cityWeatherFactory->create();

        $data = array_merge($weather, $main, $wind, $snow, $rain, $clouds, $sys);

        foreach ($data as $dataField => $value) {
            if ($modelField = CityWeatherInterface::OPENWEATHER_MAPPING[$dataField] ?? null) {
                $cityWeather->{'set' . $this->camelize($modelField)}($value);
            }
        }
        $cityWeather->setCity($weatherData['city'] ?? 'n/a');

        return $cityWeather;
    }

    /**
     * @param string $input
     * @param string $separator
     * @return string
     */
    protected function camelize(string $input, string $separator = '_'): string
    {
        return str_replace($separator, '', ucwords($input, $separator));
    }
}

<?php

namespace MonogoVendor\MonogoModule\Block;

use Magento\Framework\View\Element\Template;
use MonogoVendor\MonogoModule\Model\CityWeatherModel;
use MonogoVendor\MonogoModule\Model\ResourceModel\CityWeatherModel\CityWeatherCollection;
use MonogoVendor\MonogoModule\Model\ResourceModel\CityWeatherModel\CityWeatherCollectionFactory;

/**
 * Class CityWeatherShow
 * @package MonogoVendor\MonogoModule\Block
 */
class CityWeatherShow extends Template
{
    /**
     * @var string[]
     */
    public const FIELDS_WITH_LABELS_TO_SHOW = [
        'main' => 'Weather',
        'description' => 'Description',
        'temperature' => 'Temperature',
        'feels_like' => 'Felt temperature',
        'pressure' => 'Pressure',
        'clouds' => 'Cloudiness',
        'snow' => 'Snow volume',
        'rain' => 'Rain volume',
        'sunrise' => 'Sunrise time',
        'sunset' => 'Sunset time',
        'created_at' => 'Update time'
    ];

    /**
     * @var CityWeatherCollectionFactory
     */
    protected $cityWeatherCollectionFactory;

    /**
     * @var CityWeatherModel
     */
    public static $weather;

    /**
     * @param Template\Context $context
     * @param CityWeatherCollectionFactory $cityWeatherCollectionFactory
     * @param array $data
     */
    public function __construct(
        Template\Context             $context,
        CityWeatherCollectionFactory $cityWeatherCollectionFactory,
        array                        $data = []
    )
    {
        parent::__construct($context, $data);
        $this->cityWeatherCollectionFactory = $cityWeatherCollectionFactory;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return 'Lublin';
    }

    /**
     * @return string
     */
    public function getIcon(): string
    {
        return 'http://openweathermap.org/img/w/' . $this->getWeather()->getData('icon') . '.png';
    }

    /**
     * @return array
     */
    public function getWeatherData(): array
    {
        $weatherData = [];
        foreach (static::FIELDS_WITH_LABELS_TO_SHOW as $field => $label) {
            $weatherData[$label] = $this->getWeather()->getData($field);
        }

        return $weatherData;
    }

    /**
     * @return CityWeatherModel
     */
    protected function getWeather(): CityWeatherModel
    {
        if (is_null(static::$weather)) {
            static::$weather = $this->cityWeatherCollectionFactory->create()
                ->addFieldToFilter('city', $this->getCity())
                ->addOrder('created_at', 'DESC')
                ->getFirstItem();
        }

        return static::$weather;
    }
}

<?php

namespace MonogoVendor\MonogoModule\Model\ResourceModel\CityWeatherModel;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use MonogoVendor\MonogoModule\Model\CityWeatherModel;
use MonogoVendor\MonogoModule\Model\ResourceModel\CityWeatherResource;

/**
 * Class CityWeatherCollection
 * @package MonogoVendor\MonogoModule\Model\ResourceModel\CityWeatherModel
 */
class CityWeatherCollection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'monogo_city_weather_collection';

    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init(CityWeatherModel::class, CityWeatherResource::class);
    }
}

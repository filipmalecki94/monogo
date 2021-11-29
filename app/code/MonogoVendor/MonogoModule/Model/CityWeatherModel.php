<?php

namespace MonogoVendor\MonogoModule\Model;

use Magento\Framework\Model\AbstractModel;
use MonogoVendor\MonogoModule\Model\ResourceModel\CityWeatherResource;

/**
 * Class CityWeatherModel
 * @package MonogoVendor\MonogoModule\Model
 */
class CityWeatherModel extends AbstractModel
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'monogo_city_weather_model';

    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init(CityWeatherResource::class);
    }
}

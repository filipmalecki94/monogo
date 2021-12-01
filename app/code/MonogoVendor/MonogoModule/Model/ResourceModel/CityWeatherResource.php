<?php

namespace MonogoVendor\MonogoModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use MonogoVendor\MonogoModule\Api\Data\CityWeatherInterface;

/**
 * Class CityWeatherResource
 * @package MonogoVendor\MonogoModule\Model\ResourceModel
 */
class CityWeatherResource extends AbstractDb
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'monogo_city_weather_resource_model';

    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init('monogo_city_weather', CityWeatherInterface::FIELD_ID);
        $this->_useIsObjectNew = true;
    }
}

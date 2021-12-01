<?php

namespace MonogoVendor\MonogoModule\Cron;

use Exception;
use MonogoVendor\MonogoModule\Helper\CityWeatherHelper;
use Psr\Log\LoggerInterface;

/**
 * Class FetchWeather
 * @package MonogoVendor\MonogoModule\Cron
 */
class FetchWeather
{
    /**
     * @var CityWeatherHelper
     */
    protected $cityWeatherHelper;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @param CityWeatherHelper $cityWeatherHelper
     * @param LoggerInterface $logger
     */
    public function __construct(CityWeatherHelper $cityWeatherHelper, LoggerInterface $logger)
    {
        $this->cityWeatherHelper = $cityWeatherHelper;
        $this->logger = $logger;
    }

    /**
     * @return void
     */
    public function execute()
    {
        try {
            $this->cityWeatherHelper->fetchWeather();
        } catch (Exception $e) {
            $this->logger->error($e->getMessage());
        }
    }
}

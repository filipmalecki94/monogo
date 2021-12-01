<?php

namespace MonogoVendor\MonogoModule\Controller\Adminhtml\CityWeather;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\Page;

class Index extends Action implements HttpGetActionInterface
{
    /**
     * Authorization level of a basic admin session
     */
    const ADMIN_RESOURCE = 'MonogoVendor_MonogoModule::management';

    /**
     * @return Page|ResultInterface
     */
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu(static::ADMIN_RESOURCE);
        $resultPage->getConfig()->getTitle()->prepend(__('City Weather'));

        return $resultPage;
    }
}

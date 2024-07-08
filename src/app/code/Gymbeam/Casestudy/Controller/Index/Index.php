<?php

declare(strict_types=1);

namespace Gymbeam\Casestudy\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{
    private $pageFactory;
    private $scopeConfig;

    public function __construct(
        PageFactory $pageFactory,
    ) {
        $this->pageFactory = $pageFactory;
    }
    
    public function execute(): Page
    {
        return $this->pageFactory->create();
    }
}

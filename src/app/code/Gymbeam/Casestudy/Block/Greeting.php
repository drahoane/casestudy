<?php

declare(strict_types=1);

namespace Gymbeam\Casestudy\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Greeting extends Template
{
    private $scopeConfig;

    public function __construct(
        Context $context,
        ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    public function getGreetingText()
    {
        return $this->scopeConfig->getValue(
            'greeting/general/display_text',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}

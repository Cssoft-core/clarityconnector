<?php
namespace CSSoft\Clarityconnector\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class ClarityId extends Action
{
    protected $scopeConfig;
    protected $resultJsonFactory;

    public function __construct(
        Context $context,
        ScopeConfigInterface $scopeConfig,
        JsonFactory $resultJsonFactory
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->resultJsonFactory = $resultJsonFactory;
        parent::__construct($context);
    }

    public function execute()
    {

        $clarityId = $this->scopeConfig->getValue('claritysection/general/clarity_token', ScopeInterface::SCOPE_STORE);
        $result = $this->resultJsonFactory->create();
        return $result->setData(['clarityId' => $clarityId]);
    }
}

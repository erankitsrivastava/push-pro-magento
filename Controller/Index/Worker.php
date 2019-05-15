<?php
namespace PushPro\Notifications\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

/**
 * Class Worker
 *
 * @package PushPro\Notifications\Controller\Index
 */
class Worker extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\Controller\Result\JsonFactory
     */
    private $jsonFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $jsonFactory
    ) {
        parent::__construct($context);
        $this->jsonFactory = $jsonFactory;
    }

    /**
     * @inheritdoc
     */
    public function execute()
    {
        $responseResult = $this->resultFactory->create(ResultFactory::TYPE_RAW);

        return $responseResult
            ->setHeader('Content-Type', 'application/javascript')
            ->setHeader('Service-Worker-Allowed', '/')
            ->setContents("importScripts('https://storage.googleapis.com/push-pro-java-scripts/dev/pushpro-sw.js');");
    }
}

<?php
declare(strict_types=1);

namespace PushPro\Notifications\Controller;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\RouterInterface;

/**
 * Class Router
 *
 * @package PushPro\Notifications\Controller
 */
class Router implements RouterInterface
{
    const SERVICE_WORKER_FILENAME = "sw.js";

    /**
     * @var \Magento\Framework\App\ActionFactory
     */
    private $actionFactory;

    /**
     * Router constructor.
     * @param \Magento\Framework\App\ActionFactory $actionFactory
     */
    public function __construct(\Magento\Framework\App\ActionFactory $actionFactory)
    {
        $this->actionFactory = $actionFactory;
    }

    public function match(RequestInterface $request)
    {
        if (trim($request->getPathInfo(), "/") != self::SERVICE_WORKER_FILENAME) {
            return null;
        }

        $request
            ->setModuleName("pushpro")
            ->setControllerName("index")
            ->setActionName("worker");

        return $this->actionFactory->create('Magento\Framework\App\Action\Forward');
    }
}

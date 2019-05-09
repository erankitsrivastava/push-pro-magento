<?php
declare(strict_types=1);

namespace Deity\PushPro\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * Class PushProSnippet
 *
 * @package Deity\PushPro\ViewModel
 */
class PushProSnippet implements ArgumentInterface
{

    const SNIPPET_HTML_XML_CONFIG_PATH = 'push_pro/general/snippet';

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * PushProSnippet constructor.
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Get Push Pro code snippet
     *
     * @return string
     */
    public function getPushProCodeSnippet(): string
    {
        return (string)$this->scopeConfig->getValue(self::SNIPPET_HTML_XML_CONFIG_PATH);
    }
}

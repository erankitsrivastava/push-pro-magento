<?php
declare(strict_types=1);

namespace Deity\PushPro\Block;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Template;

/**
 * Class PushProSnippet
 *
 * @package Deity\PushPro\ViewModel
 */
class PushProSnippet extends Template
{

    const SNIPPET_HTML_XML_CONFIG_PATH = 'push_pro/general/snippet';

    /**
     * Get Push Pro code snippet
     *
     * @return string
     */
    public function getPushProCodeSnippet(): string
    {
        return (string)$this->_scopeConfig->getValue(self::SNIPPET_HTML_XML_CONFIG_PATH);
    }
}

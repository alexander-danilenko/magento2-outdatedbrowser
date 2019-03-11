<?php

namespace FFWAgency\OutdatedBrowser\Block;

use Magento\Backend\Block\Template\Context;
use Magento\Theme\Block\Html\Header\Logo;

class OutdatedBrowser extends \Magento\Framework\View\Element\Template
{
    /**
     * The logo block.
     *
     * @var Logo
     */
    protected $_logo;

    /**
     * OutdatedBrowser constructor.
     *
     * @param \Magento\Backend\Block\Template\Context $context
     *   The block template context.
     * @param \Magento\Theme\Block\Html\Header\Logo $logo
     *   Logo block.
     * @param array $data
     *   Block data.
     */
    public function __construct(Context $context, Logo $logo, array $data = [])
    {
        $this->_logo = $logo;
        parent::__construct($context, $data);
    }

    /**
     * Get logo image URL
     *
     * @return string
     */
    public function getLogoSrc()
    {
        return $this->_logo->getLogoSrc();
    }

}

<?php
/**
 * Human Element Inc.
 *
 * @package HumanElement_EmailLogoFix
 * @copyright Copyright (c) 2017 Human Element Inc. (https://www.human-element.com)
 */

namespace HumanElement\EmailLogoFix\Model\Theme\Design\Backend;

class Logo extends \Magento\Theme\Model\Design\Backend\Logo
{
    /**
     * @return mixed
     */
    protected function _getUploadDir()
    {
        return $this->_mediaDirectory->getRelativePath($this->_appendScopeInfo(static::UPLOAD_DIR));
    }
}
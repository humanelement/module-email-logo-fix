<?php
/**
 * Human Element Inc.
 *
 * @package HumanElement_EmailLogoFix
 * @copyright Copyright (c) 2017 Human Element Inc. (https://www.human-element.com)
 */

namespace HumanElement\EmailLogoFix\Model\Email\Design\Backend;

class Logo extends \HumanElement\EmailLogoFix\Model\Theme\Design\Backend\Logo
{
    /**
     * The tail part of directory path for uploading
     */
    const UPLOAD_DIR = 'email/logo';

    /**
     * Upload max file size in kilobytes
     *
     * @var int
     */
    protected $maxFileSize = 2048;

    /**
     * Getter for allowed extensions of uploaded files
     *
     * @return string[]
     */
    public function getAllowedExtensions()
    {
        return ['jpg', 'jpeg', 'gif', 'png'];
    }

    /**
     * @return mixed
     */
    protected function _getUploadDir()
    {
        return parent::_getUploadDir();
    }
}
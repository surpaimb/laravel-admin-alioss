<?php

namespace Surpaimb\AliOssUpload;

use Encore\Admin\Extension;

class AliOssUpload extends Extension
{
    public $name = 'alioss-upload';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';
}
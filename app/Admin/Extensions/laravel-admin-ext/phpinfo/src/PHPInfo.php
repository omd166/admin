<?php

namespace Encore\PHPInfo;

use Encore\Admin\Extension;

class PHPInfo extends Extension
{
    public $name = 'phpinfo';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Phpinfo',
        'path'  => 'phpinfo',
        'icon'  => 'fa-gears',
    ];
}
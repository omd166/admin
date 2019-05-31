<?php

namespace Encore\PHPInfo\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class PHPInfoController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('Title')
            ->description('Description')
            ->body(view('phpinfo::index'));
    }
}
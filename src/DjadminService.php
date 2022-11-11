<?php

namespace duojia\djadmin;

use think\Route;
use think\Service;
use think\Validate;

class DjadminService extends Service
{
    public function boot()
    {

        $this->registerRoutes(function (Route $route) {
            $route->get('djadmin/[:config]', "\\duojia\\djadmin\\Djadmin@index");
        });
    }
}

<?php

namespace MVCP\App;

defined('ABSPATH') || exit ;

use MVCP\App\Controllers\Helloworld;

class Route {
    public static function startUp( ) 
    {
        $helloworld = new Helloworld();
        add_action('admin_menu',[$helloworld,'addHelloWorldMenu']);
    }
}

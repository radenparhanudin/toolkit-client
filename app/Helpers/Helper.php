<?php

use Illuminate\Support\Facades\Route;

if (! function_exists('set_active')) {
    function set_active($uri, $output = 'active')
    {
        if( is_array($uri) ) {
            foreach ($uri as $u) {
                if (Route::is($u)) {
                    return $output;
                }
            }
        } else {
            if (Route::is($uri)){
                return $output;
            }
        }
    }
}

if (! function_exists('toolkit_info')) {
    function toolkit_info($key)
    {
        $toolkit_info = array(
            'version'   => "1.0",
            'developer' => "Raden Parhanudin",
            'whatsapp'  => "https://wa.me/6282342788059",
        );

        return $toolkit_info[$key];
    }
}


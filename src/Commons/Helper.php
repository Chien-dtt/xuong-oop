<?php

namespace Chien\XuongOop\Commons;

class Helper
{
    public static function __debug($data){
        echo '<pre>';

        print_r($data);

        die;
    }
}
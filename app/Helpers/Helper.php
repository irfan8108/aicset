<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  
use App\Models\Link;

class Helper{
    public static $navbar_links = [];
    public static function setNavbarLinks(){
        self::$navbar_links = Link::get()->groupBy('type');
        echo 'working';
    }   
    public static function getNavbarLinks(){
        echo 'working';
        dd(self::$navbar_links);
        return self::$navbar_links;
    }
}
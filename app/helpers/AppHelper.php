<?php
namespace App\Helpers;


class AppHelper
{
   static function publicAssets($image)
    {
        return asset("public/" . $image);
    }
}

<?php

if(!file_exists("publicAssets")){
    function publicAssets($image)
    {
        return asset("public/" . $image);
    }
}


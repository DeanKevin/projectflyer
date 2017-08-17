<?php

namespace App\Http\Utilities;

class Country
{
    protected $countries = [
        "United States"  =>  "us"
    ];
    public static function all()
    {
        return array_keys(static::$countries);
    }
}
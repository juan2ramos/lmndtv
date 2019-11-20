<?php
namespace App\Http\Controllers;

trait AirTableConf
{
    private $key;
    private $base;

    public function __construct()
    {
        $this->key = env('AIRTABLE_KEY');
        $this->base = env('AIRTABLE_BASE');
    }


}

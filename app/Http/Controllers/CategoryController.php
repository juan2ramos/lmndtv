<?php

namespace App\Http\Controllers;

use \Armetiz\AirtableSDK\Airtable;

class CategoryController extends Controller
{
    use AirTableConf;

    public function __invoke()
    {
        $airTable = new Airtable($this->key, $this->base);
        $records = $airTable->findRecords('Categorias');
        return view('front.chooseNight', compact('records'));
    }
}

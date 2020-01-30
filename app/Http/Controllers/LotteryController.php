<?php

namespace App\Http\Controllers;

use Armetiz\AirtableSDK\Airtable;

class LotteryController extends Controller
{
    use AirTableConf;

    public function __invoke($categorySlug, $lotterySlug = false)
    {
        $airTable = new Airtable($this->key, $this->base);
        $category = $airTable->findRecord('Categorias', ['slug' => $categorySlug]);
        $categoryFields = $category->getFields();
        $lotteriesIds = $categoryFields['Sorteos'];
        $lotteries = [];
        $lotteriesFields = [];
        foreach ($lotteriesIds as $lotteriesId) {
            $lotteryLocal = $airTable->getRecord('Sorteos', $lotteriesId);
            $lotteries[] = $lotteryLocal;
            $lotteriesFields[] = $lotteryLocal->getFields();
        }
        $lotteries = collect($lotteries);
        if ($lotterySlug) {
            $index = $lotteries->search(function ($item) use ($lotterySlug) {
                $data = $item->getFields();
                return $data['slug'] == $lotterySlug;
            });
            $lottery = $lotteries[$index];

        } else {
            $lottery = $lotteries->first();
        }

        $lotteryFields = $lottery->getFields();

        $participants = [];
        $selected = [];
        $participantsIds = $lotteryFields['Participantes']??[];

        foreach ($participantsIds as $participantsId) {
            $participant = $airTable->getRecord('Participantes', $participantsId);
            $n = (!empty ($participant->getFields()['numeros']))?
                $participant->getFields()['numeros']:[];
            $selected = array_merge($selected, $n);
            $participants[] = $participant;
        }
        $numbers = [];
        for ($i = 0; $i < 100; $i++) {
            $numbers[] = ['n' => $i, 'state' => in_array($i, $selected)];
        }
        $numbers = collect($numbers);
        $lotteries = collect($lotteriesFields);
        return view('front.lottery', compact('lottery', 'lotteries', 'categoryFields', 'numbers'));
    }

}

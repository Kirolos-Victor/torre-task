<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class QuoteService
{

    public function execute()
    {
        $quotes=[];
        for($i=0;$i<5;$i++)
        {
            $quote=Http::get('https://api.kanye.rest/');
            $quotes[]=$quote['quote'];
        }

        return $quotes;

    }

}

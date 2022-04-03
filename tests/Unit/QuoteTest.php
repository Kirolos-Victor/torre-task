<?php

namespace Tests\Unit;

use Tests\TestCase;

class QuoteTest extends TestCase
{

    public function test_count_of_quotes_equal_five()
    {
        $quotesArray = (new \App\Services\QuoteService)->execute();
        $expectedCount = 5;
        $this->assertCount($expectedCount,$quotesArray);

    }
}

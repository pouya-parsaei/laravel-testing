<?php

namespace Tests\Unit;

use App\Services\CurrencyService;
use PHPUnit\Framework\TestCase;

class CurrencyTest extends TestCase
{

    public function test_convert_usd_to_eur_successful(): void
    {
        $result = (new CurrencyService())->convert(100, 'usd', 'eur');

        $this->assertEquals(98, $result);
    }

    public function test_convert_usd_to_gbp_returns_zero(): void
    {
        $result = (new CurrencyService())->convert(100, 'usd', 'gbp');

        $this->assertEquals(0, $result);
    }
}

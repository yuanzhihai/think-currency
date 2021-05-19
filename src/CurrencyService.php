<?php

namespace yzh52521\ThinkCurrency;

use AmrShawky\CurrencyFactory;

class CurrencyService extends \think\Service
{

    public function boot()
    {
        $this->app->bind('currency',CurrencyFactory::class);
    }
}

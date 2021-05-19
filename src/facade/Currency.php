<?php
namespace yzh52521\ThinkCurrency\facade;

use AmrShawky\CurrencyFactory;

class Currency extends \think\Facade
{
    public static function getFacadeClass()
    {
       return  CurrencyFactory::class;
    }
}

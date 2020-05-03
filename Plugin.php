<?php namespace PopovN\BigBuyAPI;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
        return [
            'bigbuyapi' => [
                'label'       => 'BigBuy API',
                'description' => 'BigBuy API Settings.',
                'category'    => 'General',
                'icon'        => 'icon-cart-arrow-down',
                'class'       => 'PopovN\BigBuyAPI\Models\Settings',
                'order'       => 500,
                'keywords'    => 'bigbuy api settings key apy-key big buy',
                'permissions' => ['popovn.bigbuyapi.api_settings']
            ]
        ];
    }
}

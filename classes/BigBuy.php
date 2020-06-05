<?php
namespace PopovN\BigBuyAPI\Classes;

use Carbon\Carbon;
use PopovN\BigBuyAPI\Models\Settings;
use Cache;

class BigBuy
{
    private $apiKey;
    private $devMode;
    protected $apiUrl;
    protected $apiToken;
    protected $format = 'json';

    /**
     * BigBuy constructor.
     */
    public function __construct()
    {
        $this->devMode = Settings::get('dev');
        $this->apiKey = Settings::get('api_key');
        $this->apiUrl = "https://api.bigbuy.eu";
        if ($this->devMode) {
            $this->apiUrl = "https://api.sandbox.bigbuy.eu";
            $this->apiKey = Settings::get('dev_api_key');
        }
        if (Cache::has('bigbuy_token')) {
            $this->apiToken = Cache::get('bigbuy_token');
        }
        else {
            $this->apiToken = $this->getAPIToken();
        }
    }

    private function getAPIToken()
    {
        $expiresAt = Carbon::now()->addMinutes(60);
        Cache::put('bigbuy_token', $this->apiKey, $expiresAt);

        return $this->apiKey;
    }
}

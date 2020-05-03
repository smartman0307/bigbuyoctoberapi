<?php
namespace PopovN\BigBuyAPI\Classes;

use Carbon\Carbon;
use PopovN\BigBuyAPI\Classes\Request\GetRequest;
use PopovN\BigBuyAPI\Models\Settings;
use Cache;

class BigBuy
{
    private $apiKey;
    private $apiMode;
    protected $apiUrl;
    protected $apiToken;
    protected $format = 'json';

    /**
     * BigBuy constructor.
     */
    public function __construct()
    {
        $this->apiKey = Settings::get('api_key');
        $this->apiMode = Settings::get('dev');
        $this->apiUrl = "https://api.bigbuy.eu";
        if ($this->apiMode) {
            $this->apiUrl = "https://api.sandbox.bigbuy.eu";
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
        $endPoint = $this->apiUrl . "/token";
        $data = [
            'api_key' => $this->apiKey
        ];
        $token = GetRequest::send($endPoint, $data);
        $expiresAt = Carbon::now()->addMinutes(60);
        Cache::put('bigbuy_token', $token, $expiresAt);

        return $token;
    }
}

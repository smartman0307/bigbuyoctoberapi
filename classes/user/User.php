<?php
namespace PopovN\BigBuyAPI\Classes\User;

use PopovN\BigBuyAPI\Classes\BigBuy;
use PopovN\BigBuyAPI\Classes\Request\GetRequest;

class User extends BigBuy
{
    private $urlPrefix = '/rest/user';
    private $requestUrl;

    /**
     * Module constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->requestUrl = $this->apiUrl . $this->urlPrefix;
    }

    /**
     * Get the amount of money available in the purse.
     * @return mixed
     */
    public function getPurse()
    {
        $endPoint = $this->requestUrl . "/purse.".$this->format;
        return GetRequest::send($endPoint);
    }
}

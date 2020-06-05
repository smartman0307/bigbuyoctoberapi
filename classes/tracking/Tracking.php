<?php
namespace PopovN\BigBuyAPI\Classes\Tracking;

use PopovN\BigBuyAPI\Classes\BigBuy;
use PopovN\BigBuyAPI\Classes\Request\GetRequest;
use PopovN\BigBuyAPI\Classes\Request\PostRequest;

class Tracking extends BigBuy
{
    public $urlPrefix = '/rest/tracking';
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
     * Get the list of available carriers.
     * @return mixed
     */
    public function getCarriers()
    {
        $endPoint = $this->requestUrl . "/carriers.".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Get the list of available carriers.
     * @param int $id BigBuy order reference
     * @return mixed
     */
    public function getTracking(int $id)
    {
        $endPoint = $this->requestUrl . "/order/".$id.".".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Get the list of available trackings for the passed orders.
     * @param array $data Products list
     * Structure:
     * {
     *   "track":{                  // required
     *      "orders":[              // required
     *          {
     *              "id":"66666"    // required
     *          },
     *          {
     *              "id":"66666"
     *          }
     *       ]
     *   }
     * }
     * @return mixed
     */
    public function getTrackingForOrders($data = array())
    {
        $endPoint = $this->requestUrl . "/orders.".$this->format;
        return PostRequest::send($endPoint, $data);
    }
}

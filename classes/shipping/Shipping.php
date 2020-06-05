<?php
namespace PopovN\BigBuyAPI\Classes\Shipping;

use PopovN\BigBuyAPI\Classes\BigBuy;
use PopovN\BigBuyAPI\Classes\Request\GetRequest;
use PopovN\BigBuyAPI\Classes\Request\PostRequest;

class Shipping extends BigBuy
{
    public $urlPrefix = '/rest/shipping';
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
     * Returns the structure of an order.
     * @return mixed
     */
    public function getNewOrder()
    {
        $endPoint = $this->requestUrl . "/orders/new.".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Get the list of available shipping options with
     * the calculated weight and cost in Kg and € respectively, for the given order.
     * @param array $data Products list
     * Structure:
     * {
     *   "order":{                          // required
     *      "delivery":{
     *          "isoCountry":"ES"           // required
     *          "postcode":"46005"          // required
     *      },
     *      "products":[                    // required
     *          {
     *              "reference":"F1505138"  // required
     *              "quantity":1            // required
     *          },
     *          {
     *              "reference":"F1505151"
     *              "quantity":4
     *          },
     *       ]
     *   }
     * }
     * @return mixed
     */
    public function getShippingForOrders($data = array())
    {
        $endPoint = $this->requestUrl . "/orders.".$this->format;
        return PostRequest::send($endPoint, $data);
    }
}

<?php
namespace PopovN\BigBuyAPI\Classes\Order;

use PopovN\BigBuyAPI\Classes\BigBuy;
use PopovN\BigBuyAPI\Classes\Request\GetRequest;
use PopovN\BigBuyAPI\Classes\Request\PostRequest;

class Order extends BigBuy
{
    public $urlPrefix = '/rest/order';
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
     * Get order shipping address structure.
     * @return mixed
     */
    public function getAddressesNew()
    {
        $endPoint = $this->requestUrl . "/addresses/new.".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Get order carriers structure.
     * @return mixed
     */
    public function getCarriersNew()
    {
        $endPoint = $this->requestUrl . "/carriers/new.".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Get order structure.
     * @return mixed
     */
    public function getOrderNew()
    {
        $endPoint = $this->requestUrl . "/new.".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Get order products structure.
     * @return mixed
     */
    public function getProductsNew()
    {
        $endPoint = $this->requestUrl . "/products/new.".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Get order information by customer reference.
     * @param $reference BigBuy customer reference
     * @return mixed
     */
    public function getOrderInfoByReference($reference)
    {
        $endPoint = $this->requestUrl . "/reference/".$reference.".".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Get order information.
     * @param $idOrder BigBuy order id
     * @return mixed
     */
    public function getOrderInfoById($idOrder)
    {
        $endPoint = $this->requestUrl . "/reference/".$idOrder.".".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Check/simulate an order and return the total order to paid.
     * @param array $data Order data
     * Structure:
     * {
            "order": {
                "internalReference": "123456",
                "language": "es",
                "paymentMethod": "moneybox",
                "carriers": [
                    {
                        "name": "correos"
                    },
                    {
                        "name": "chrono"
                    }
                ],
                "shippingAddress": {
                    "firstName": "John",
                    "lastName": "Doe",
                    "country": "ES",
                    "postcode": "46005",
                    "town": "Valencia",
                    "address": "C/ Altea",
                    "phone": "664869570",
                    "email": "john@email.com",
                    "comment": ""
                },
                "products": [
                    {
                        "reference": "V0100100",
                        "quantity": 1
                    },
                    {
                        "reference": "F1505138",
                        "quantity": 4
                    }
                ]
            }
        }
     *
     * @return mixed
     */
    public function checkOrder($data)
    {
        $endPoint = $this->requestUrl . "/check.".$this->format;
        return PostRequest::send($endPoint, $data);
    }

    /**
     * Submit an order.
     * @param array $data Order data
     * Structure:
     * {
            "order": {
                "internalReference": "123456",
                "language": "es",
                "paymentMethod": "moneybox",
                "carriers": [
                    {
                        "name": "correos"
                    },
                    {
                        "name": "chrono"
                    }
                ],
                "shippingAddress": {
                    "firstName": "John",
                    "lastName": "Doe",
                    "country": "ES",
                    "postcode": "46005",
                    "town": "Valencia",
                    "address": "C/ Altea",
                    "phone": "664869570",
                    "email": "john@email.com",
                    "comment": ""
                },
                "products": [
                    {
                        "reference": "V0100100",
                        "quantity": 1
                    },
                    {
                        "reference": "F1505138",
                        "quantity": 4
                    }
                ]
            }
        }
     *
     * @return mixed
     */
    public function createOrder($data)
    {
        $endPoint = $this->requestUrl . "/create.".$this->format;
        return PostRequest::send($endPoint, $data);
    }
}

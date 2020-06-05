<?php
namespace PopovN\BigBuyAPI\Classes\Module;

use PopovN\BigBuyAPI\Classes\BigBuy;
use PopovN\BigBuyAPI\Classes\Request\GetRequest;

class Module extends BigBuy
{
    public $urlPrefix = '/rest/module';
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
     * Get all Modules.
     * @param array $filters Filters list
     * Possible filters:
     * name (Module name)
     * platform (Platform name)
     * platformVersion (Platform version)
     * @return mixed
     */
    public function getModules($filters = array())
    {
        $endPoint = $this->requestUrl . "/.".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * Get all module platforms.
     * @param array $filters Filters list
     * Possible filters:
     * name (Module name)
     * platform (Platform name)
     * platformVersion (Platform version)
     * @return mixed
     */
    public function getPlatforms($filters = array())
    {
        $endPoint = $this->requestUrl . "/platforms.".$this->format;
        return GetRequest::send($endPoint, $filters);
    }
}

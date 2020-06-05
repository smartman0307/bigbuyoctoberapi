<?php
namespace PopovN\BigBuyAPI\Classes\Request;

use Cache;

class Request
{
    private $url;
    private $data;
    private $method;
    private $authorization;

    /**
     * Request constructor.
     * @param $url
     * @param $data
     * @param string $method
     * @param null $authorization
     */
    public function __construct($url, $data, $method = "POST", $authorization = null)
    {
        $this->url = $url;
        $this->data = $data;
        if ($method == "POST") {
            $this->data = json_encode($data);
        }
        elseif ($method == "GET") {
            $this->url .= '?' . http_build_query($this->data);
        }
        $this->method = $method;
        $this->authorization = $authorization;

        if (empty($authorization) && Cache::has('bigbuy_token')) {
            $this->authorization = Cache::get('bigbuy_token');
        }
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
    }

    /**
     * @param array $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method)
    {
        $this->method = $method;
    }

    /**
     * @param null|string $authorization
     */
    public function setAuthorization($authorization)
    {
        $this->authorization = $authorization;
    }



    public function send()
    {
        $header = array('Content-Type: application/json');
        $ch = curl_init($this->url); // Initialise cURL

        if ($this->authorization) {
            $authorization = "Authorization: Bearer ".$this->authorization; // Prepare the authorisation token
            $header[] = $authorization;
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        if ($this->method == "POST") {
            curl_setopt($ch, CURLOPT_POST, 1); // Specify the request method as POST
            curl_setopt($ch, CURLOPT_POSTFIELDS, $this->data); // Set the posted fields
        }

        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // This will follow any redirects
        $result = curl_exec($ch); // Execute the cURL statement
        curl_close($ch); // Close the cURL connection
        return json_decode($result); // Return the received data
    }
}

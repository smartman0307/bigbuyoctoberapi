<?php
namespace PopovN\BigBuyAPI\Classes\Request;

class GetRequest
{
    public static function send($url, $data = [])
    {
        $request = new Request($url, $data, "GET");
        return $request->send();
    }
}

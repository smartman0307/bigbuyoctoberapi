<?php
namespace PopovN\BigBuyAPI\Classes\Request;

class PostRequest
{
    public static function send($url, $data = [])
    {
        $request = new Request($url, $data, "POST");
        return $request->send();
    }
}

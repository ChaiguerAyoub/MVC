<?php

class Curl
{
    var $curl;

    function __construct()
    {
        $this->curl = curl_init();
    }


    public function curl($url)
    {
        curl_setopt($this->curl, CURLOPT_URL, $url);
        $result = curl_exec($this->curl);

        return ($result);
    }

    function postCurl($data = [], $url)
    {
        curl_setopt($this->curl, CURLOPT_URL, $url);
        curl_setopt($this->curl, CURLOPT_POST, true);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, http_build_query($data));
        $result = curl_exec($this->curl);

        return $result;
    }


    function getCurl($data, $url)
    {
        curl_setopt($this->curl, CURLOPT_URL, $url . '?' . http_build_query($data));
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($this->curl);

        return $result;
    }

    function close()
    {
        curl_close($this->curl);
    }


}
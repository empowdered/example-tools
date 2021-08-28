<?php

function parseXml($xml) {
    $data = null;
    try {
        $xml = simplexml_load_string($xml);
    } catch (Exception $ex) {
        return null;
    }
    return $data;
}

function sendRequest($url, $method, $headers, $request, $type) {
    $ch = null;
    $array = null;
    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $headers = array(
            "Content-Type: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        //debug
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        
        if ($method == 'SOAP') {
            
        } else if ($method == 'REST') {
            
        }
    } catch (Exception $ex) {
        return null;
    }
}
function sendPing($ip){
    $result = null;
    try{
        $result = shell_exec("ping -c 1 $ip");
    } catch (Exception $ex) {
        return null;
    }
    return $result;
}

function nsLookup($url){
    $ip = null;
    try{
        $ip = gethostbyname($url);
    } catch (Exception $ex) {
        return null;
    }
    return $ip;
}

<?php
namespace ShiptorRussiaApiClient\Client;

use ShiptorRussiaApiClient\Client\Api\PublicEndpoint,
    ShiptorRussiaApiClient\Client\Api\ShippingEndpoint,
    ShiptorRussiaApiClient\Client\Core\Configuration;

class Shiptor{
    public function __construct($arParams = []) {
        if(isset($arParams["API_KEY"]) && !empty($arParams["API_KEY"])){
            Configuration::setApiKey($arParams["API_KEY"]);
        }
        if(isset($arParams["ENCODING"]) && !empty($arParams["ENCODING"])){
            Configuration::setEncoding($arParams["ENCODING"]);
        }
        if(isset($arParams["NAME"]) && !empty($arParams["NAME"])){
            Configuration::setName($arParams["NAME"]);
        }
        if(isset($arParams["LANG"]) && !empty($arParams["LANG"])){
            Configuration::setLang($arParams["LANG"]);
        }
        if(isset($arParams["SHIPPING_VERSION"]) && !empty($arParams["SHIPPING_VERSION"])){
            $shippingVersion = intval($arParams["SHIPPING_VERSION"]);
        }else{
            $shippingVersion = 1;
        }
        Configuration::setShippingUrlByVersion($shippingVersion);
        if(isset($arParams["PUBLIC_VERSION"]) && !empty($arParams["PUBLIC_VERSION"])){
            $publicShipping = intval($arParams["PUBLIC_VERSION"]);
        }else{
            $publicShipping = 1;
        }
        Configuration::setPublicUrlByVersion($publicShipping);
        if(isset($arParams["BASE_URL"]) && !empty($arParams["BASE_URL"])){
            Configuration::setBaseUrl($arParams["BASE_URL"]);
        }
        if (!empty($arParams['SHIPPING_CLIENT'])) {
            Configuration::setShippingEndpointClient($arParams['SHIPPING_CLIENT']);
        }
        if (!empty($arParams['PUBLIC_CLIENT'])) {
            Configuration::setPublicEndpointClient($arParams['PUBLIC_CLIENT']);
        }
    }
    public function PublicEndpoint(){
        return new PublicEndpoint();
    }
    public function ShippingEndpoint(){
        return new ShippingEndpoint();
    }
}
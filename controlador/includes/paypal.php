<?php

require 'paypal/autoload.php';

define('URL_SITIO', 'http://localhost/goepav');

$apiContext = new \PayPal\Rest\ApiContext( 
    new \PayPal\Auth\OAuthTokenCredential(
        'Aa9P-A0QCZnFFAdsfsiiGfnVf6mQYnvwViA3U-UVFulcWxh4Hlyvv1TejePBFEjwEn2lBCjRKeXUz6jF',    //ClienteID
     'EAbNuv97yXJ3PgUAa_vRhHHE-gdOslU6p5Y6mSxHAYiFD17VteLl6sxPcotHuq31rNzv8LtPRURdwhBq'   //Secret  
    ) 
);


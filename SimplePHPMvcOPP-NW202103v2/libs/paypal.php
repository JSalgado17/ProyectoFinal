<?php

require_once 'vendor/autoload.php';

/**
 * Retorna el Api Context de Paypal
 *
 * @return void
 */
function getApiContext()
{
    $apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            "ATubVRs89sB8rbdhad1_QpN-FUnqJ9NgDhoVS0HaiHW0vYa3wQCQqJTrCzk0R4ohevT6pyKkDuP1WavZ",
            "ELwOVN49m3cG-HfvLehaKNCAVrez-SFZCaQIrC0C3_AWYk4OCV4tpE-kfEGHMHp9m9LlQeykGMbe87XM"
        )
    );
    return $apiContext;
}

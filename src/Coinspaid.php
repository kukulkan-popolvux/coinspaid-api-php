<?php

namespace KukulkanPopolvux\CoinspaidApiPhp;

use KukulkanPopolvux\CoinspaidApiPhp\{Builder, Basic, Api};

final class Coinspaid
{
    /**
     * Get class instance object KukulkanPopolvux\CoinspaidApiPhp\Builder
     *
     * @return Builder
     */
    static public function builder(): Builder
    {
        return new Builder;
    }

    /**
     *  Get class instance object KukulkanPopolvux\CoinspaidApiPhp\Basic
     *
     * @param string $apiKey
     * @param string $secretKey
     * @param string $environment
     * @return Basic
     */
    static public function basic(string $apiKey = '', string $secretKey = '', string $environment = 'prod'): Basic
    {
        return new Basic($apiKey, $secretKey, $environment);
    }

    /**
     * Get class instance object KukulkanPopolvux\CoinspaidApiPhp\Api
     *
     * @param string $apiKey
     * @param string $secretKey
     * @param string $environment
     * @return Api
     */
    static public function api(string $apiKey = '', string $secretKey = '', string $environment = 'prod'): Api
    {
        return new Api($apiKey, $secretKey, $environment);
    }
}

<?php


namespace idegostaran\cloudkade\Services;

use idegostaran\cloudkade\Adapter\Adapter;

interface API
{
    /**
     * API constructor.
     *
     * @param Adapter $http
     * @param array $config
     */
    public function __construct(Adapter $http, array $config);
}

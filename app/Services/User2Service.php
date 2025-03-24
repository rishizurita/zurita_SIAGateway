<?php
namespace App\Services;

use App\Traits\ConsumesExternalService;

class User2Service
{
    use ConsumesExternalService;

    /**
     * The base uri to consume the User2 Service
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.users2.base_uri');
    }

    /**
     * Obtain the full list of Users from User2 Site
     * @return string
     */
    public function obtainUsers2()
    {
        return $this->performRequest('GET', 'api/users'); // This code will call GET localhost:8001/users (our site2)
    }
}
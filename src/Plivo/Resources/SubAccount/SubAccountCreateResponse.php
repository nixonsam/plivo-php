<?php

namespace Plivo\Resources\SubAccount;


use Plivo\Resources\ResponseUpdate;

/**
 * Class SubAccountCreateResponse
 * @package Plivo\Resources\SubAccount
 */
class SubAccountCreateResponse extends ResponseUpdate
{
    /**
     * @var string
     */
    protected $authId;
    /**
     * @var string
     */
    protected $authToken;

    /**
     * SubAccountCreateResponse constructor.
     * @param $message
     * @param $authId
     * @param $authToken
     */
    public function __construct($message, $authId, $authToken)
    {
        parent::__construct($message);
        $this->authId = $authId;
        $this->authToken = $authToken;
    }

    /**
     * @return string
     */
    public function getAuthId()
    {
        return $this->authId;
    }

    /**
     * @return string
     */
    public function getAuthToken()
    {
        return $this->authToken;
    }
}
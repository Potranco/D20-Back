<?php

namespace AppBundle\Entity;

use FOS\OAuthServerBundle\Model\AccessToken as BaseAccessToken;

class OAuthAccessToken extends BaseAccessToken
{
    protected $id;
    protected $client;
    protected $user;
    /**
     * @var \AppBundle\Entity\D20Player
     */
    private $userId;

    /**
     * @var \AppBundle\Entity\OAuthClient
     */
    private $clientId;


    /**
     * Set userId
     *
     * @param \AppBundle\Entity\D20Player $userId
     *
     * @return OAuthAccessToken
     */
    public function setUserId(\AppBundle\Entity\D20Player $userId = null)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return \AppBundle\Entity\D20Player
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set clientId
     *
     * @param \AppBundle\Entity\OAuthClient $clientId
     *
     * @return OAuthAccessToken
     */
    public function setClientId(\AppBundle\Entity\OAuthClient $clientId = null)
    {
        $this->clientId = $clientId;

        return $this;
    }
}

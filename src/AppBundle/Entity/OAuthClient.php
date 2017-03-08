<?php

namespace AppBundle\Entity;

use FOS\OAuthServerBundle\Model\Client as BaseClient;

class OAuthClient extends BaseClient
{
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    /**
     * @var string
     */
    private $redirectUrls;


    /**
     * Set redirectUrls
     *
     * @param string $redirectUrls
     *
     * @return OAuthClient
     */
    public function setRedirectUrls($redirectUrls)
    {
        $this->redirectUrls = $redirectUrls;

        return $this;
    }

    /**
     * Get redirectUrls
     *
     * @return string
     */
    public function getRedirectUrls()
    {
        return $this->redirectUrls;
    }
}

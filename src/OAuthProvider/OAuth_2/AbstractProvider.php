<?php

namespace OAuthProvider\OAuth_2;

class AbstractProvider
{

    const version = '2.0';
    const host = '';

    public $validScopes = array();
    public $clientId;
    public $clientSecret;

    public function __construct($options)
    {
        if(isset($options['client_id']))
            $this->clientId = $options['client_id'];
        if(isset($options['client_secret']))
            $this->clientSecret = $options['client_secret'];
        if(isset($options['valid_scopes'])
            $this->validScopes = $options['valid_scopes'];
    }

    public function getClientId() {
        return $this->clientId;
    }

    public function getClientSecret() {
        return $this->clientSecret;
    }

    abstract public function getAuthorizeUrl();
    abstract public function getAccessTokenUrl();
    abstract public function getScopes();
}

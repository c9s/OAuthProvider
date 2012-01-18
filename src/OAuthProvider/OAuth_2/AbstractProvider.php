<?php

namespace OAuthProvider\OAuth_2;

abstract class AbstractProvider
{

    const version = '2.0';
    const host = '';

    public $clientId;
    public $clientSecret;

    public function __construct($options)
    {
        if(isset($options['client_id']))
            $this->clientId = $options['client_id'];
        if(isset($options['client_secret']))
            $this->clientSecret = $options['client_secret'];
        if(isset($options['valid_scopes']))
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

    public function getValidScopes() {  }

    /**
     * return default response type: token
     *
     * valid types: 'token', 'code'
     *
     * @see http://developers.gigya.com/020_Developer_Guide/85_REST/OAuth2
     */
    public function getResponseType() {
        return 'token';
    }


    /**
     * return default grant type: 'none'
     *
     * valid types: 'authorization_code', 'none'
     */
    public function getGrantType() {
        return 'none';
    }

}
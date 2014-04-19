<?php

namespace OAuthProvider\OAuth2;

abstract class AbstractProvider
{

    /**
     * @var string oauth implementation version.
     */
    const VERSION = '2.0';

    /**
     * @var string the oauth service provider domain name, eg. api.nike.com
     *
     */
    const HOST = '';

    /**
     * @var string the oauth service provider name
     */
    const NAME = '';


    /**
     * @var string the client id for oauth client, each oauth client has its own id.
     */
    public $clientId;

    /**
     * @var string the client secret for oauth client, each oauth client has its own secret.
     */
    public $clientSecret;

    public function __construct($options)
    {
        if (isset($options['client_id'])) {
            $this->clientId = $options['client_id'];
        }
        if (isset($options['client_secret'])) {
            $this->clientSecret = $options['client_secret'];
        }
        if (isset($options['valid_scopes'])) {
            $this->validScopes = $options['valid_scopes'];
        }
    }

    public function getName()
    {
        if ( static::NAME ) {
            return static::NAME;
        }
        return get_class($this);
    }

    /**
     * Get oauth provider identity
     *
     * @return string
     */
    public function getIdentity() {
        return strtolower(static::NAME);
    }

    public function getClientId() {
        return $this->clientId;
    }

    public function getClientSecret() {
        return $this->clientSecret;
    }

    abstract public function getAuthorizeUrl();
    abstract public function getAccessTokenUrl();

    public function getValidScopes() { return array(); }

    /**
     * Return default response type: token
     *
     * valid types: 'token', 'code'
     *
     * This should be based on the token response data.
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

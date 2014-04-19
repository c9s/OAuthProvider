<?php
namespace OAuthProvider\OAuth2;

/*
 * http://developer.github.com/v3/oauth/
 */
class OAuthNikePlus extends AbstractProvider
{
    const NAME = 'NikePlus';
    const HOST = 'api.nike.com';

    public function getAuthorizeUrl() {
        return 'https://' . self::HOST . '/oauth/2.0/authorize';
    }

    public function getAccessTokenUrl() {
        return 'https://' . self::HOST . '/oauth/2.0/token';
    }

    public function getDefaultScopes() {
        return array();
    }

    public function getValidScopes() {
        return array();
    }

    public function getResponseType() {
        return 'bearer';
    }

}

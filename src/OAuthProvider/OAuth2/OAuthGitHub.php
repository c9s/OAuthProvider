<?php
namespace OAuthProvider\OAuth2;

/*
 * http://developer.github.com/v3/oauth/
 */
class OAuthGitHub extends AbstractProvider
{
    const NAME = 'GitHub';
    const HOST = 'github.com';

    public function getAuthorizeUrl() {
        return 'https://' . self::HOST . '/login/oauth/authorize';
    }

    public function getAccessTokenUrl() {
        return 'https://' . self::HOST . '/login/oauth/access_token';
    }

    public function getDefaultScopes() {
        return array('user','public_repo','repo','gist');
    }

    public function getValidScopes() {
        return array('user','public_repo','repo','gist');
    }

    public function getResponseType() {
        return 'token';
    }

}

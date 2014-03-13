<?php
namespace OAuthProvider\OAuth2;

class OAuthGoogle
{
    /*
        Version   => 2,
        Authorize_url    => 'https://accounts.google.com/o/oauth2/auth',
        Access_token_url => 'https://accounts.google.com/o/oauth2/token',
        Response_type    => 'code',
        Grant_type       => 'authorization_code',
        Request_method   => 'POST',
    */
    const HOST = 'accounts.google.com';
    const NAME = 'Google';

    public function getAuthorizeUrl() {
        return 'https://accounts.google.com/o/oauth2/auth';
    }

    public function getAccessTokenUrl() {
        return 'https://accounts.google.com/o/oauth2/token';
    }

    public function getResponseType() {
        return 'code';
    }

    public function getGrantType() {
        return 'authorization_code';
    }

    public function getValidScopes() { return array(); }
}

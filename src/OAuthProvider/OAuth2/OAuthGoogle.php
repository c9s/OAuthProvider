<?php
namespace OAuthProvider\OAuth2;

class OAuthGoogle
{
    /*
	version   => 2,
	authorize_url    => 'https://accounts.google.com/o/oauth2/auth',
	access_token_url => 'https://accounts.google.com/o/oauth2/token',
	response_type    => 'code',
	grant_type       => 'authorization_code',
	request_method   => 'POST',
    */
    const host = 'accounts.google.com';
    const name = 'Google';

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

    public function getValidScopes() { }
}

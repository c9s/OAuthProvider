<?php
namespace OAuthProvider\OAuth_2;

class OAuthGitHub extends AbstractProvider
{

    /*
    qw(client_id client_secret authorize_url access_token_url);

	version   => 2,
	authorize_url    => 'https://github.com/login/oauth/authorize',
	access_token_url => 'https://github.com/login/oauth/access_token',
	scope            => 'user,public_repo'

	authorize_url    => 'https://accounts.google.com/o/oauth2/auth',
	access_token_url => 'https://accounts.google.com/o/oauth2/token',
	response_type    => 'code',
	grant_type       => 'authorization_code',
	request_method   => 'POST',
     */
    const host = 'github.com';

    public function getAuthorizeUrl() {
        return 'https://' . self::host . '/login/oauth/authorize';
    }

    public function getAccessTokenUrl() {
        return 'https://' . self::host . '/login/oauth/access_token';
    }

    public function getScopes() {
        return '';
    }




}
 

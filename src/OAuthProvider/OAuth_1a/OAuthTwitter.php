<?php
namespace OAuthProvider\OAuth_1a;

class OAuthTwitter extends AbstractProvider
{
    const version = '1.0a';
    const host = 'api.twitter.com';

    /*
	request_token_url => 'https://api.twitter.com/oauth/request_token',
	request_token_method => 'POST',
	access_token_url  => 'https://api.twitter.com/oauth/access_token',
	access_token_method => 'POST',
	authorize_url     => 'https://api.twitter.com/oauth/authenticate',
    */

    public function getRequestTokenUrl() { return 'https://' . self::host . '/oauth/request_token'; }

    public function getRequestTokenMethod() { return 'POST'; }

    public function getAccessTokenUrl() { return 'https://' . self::host . '/oauth/access_token'; }

    public function getAccessTokenMethod() { return 'POST'; }

    public function getAuthorizeUrl() { return 'https://' . self::host . '/oauth/authenticate'; }

}



